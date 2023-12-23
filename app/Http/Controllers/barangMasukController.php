<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use App\Models\Kedatangan;
use App\Models\Vendor;
use Illuminate\Http\Request;

class barangMasukController extends Controller
{
    public function index()
    {

        return view('page.dashboard', ['title' => 'dashboard']);
    }

    // 'page.barangmasuk', [
    //         'kedatangans' => Kedatanagan::latest()->paginate(10),
    //         'vendors' => Vendor::latest()->paginate(10),
    //         'title' => 'Barang Masuk',

    //     ]

    public function barangmasuk()
    {
        return view('page.barangmasuk', [
            'barangs' => DataBarang::all(),
            'kedatangans' => Kedatangan::all(),
            'vendors' => Vendor::all(),
            'title' => 'barangmasuk',
        ]);
    }

    public function tambahkedatangan(Request $request)
    {
        $validasi = $request->validate([
            'tanggal' => 'required|date',
            'namabarang' => 'required',
            'sj' => 'required|min:3',
            'po' => 'required',
            'kategori' => 'required',
            'vendor' => 'required',
            'satuan' => 'required',
            'qty' => 'required|numeric|min:1', // Contoh validasi numerik dengan minimal nilai 1
        ], [
            'tanggal.required' => 'Tanggal harus diisi.',
            'tanggal.date' => 'Format tanggal tidak valid.',
            'namabarang.required' => 'Nama barang harus diisi.',
            'namabarang.min' => 'Nama barang minimal harus 3 karakter.',
            'sj.required' => 'Kolom SJ harus diisi.',
            'sj.min' => 'Kolom SJ minimal harus 3 karakter.',
            'po.required' => 'Isikan vendor Terlebih Dahulu',
            'vendor.required' => 'Isikan vendor Terlebih Dahulu',
            'kategori.required' => 'Isikan kategori Terlebih Dahulu',
            'satuan.required' => 'Satuan harus dipilih.',
            'qty.required' => 'Qty harus diisi.',
            'qty.numeric' => 'Qty harus berupa angka.',
            'qty.min' => 'Qty minimal harus 1.',
        ]);

        if (!$validasi) {
            return redirect()->back()->with('message', 'Gagal menambahkan data. Silakan coba lagi.');
        }

        $databarang = DataBarang::find($request->namabarang);
        if ($databarang) {
            $databarang->update([
                'qty' => $request->qty + $databarang->qty,
            ]);
        }

        // Jika validasi berhasil, maka lakukan proses simpan data
        Kedatangan::create([
            'tanggal' => $request->tanggal,
            'data_barang_id' => $request->namabarang,
            'sj' => $request->sj,
            'po' => $request->po,
            'vendor_id' => $request->vendor,
            'kategori' => $request->kategori,
            'distributor' => $request->distributor,
            'transporter' => $request->transporter,
            'satuan' => $request->satuan,
            'qty_kedatangan' => $request->qty,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    }

    public function editkedatangan(Request $request, $id)
    {
        // $validasi = $request->validate([
        //     'tanggal' => 'required|date',
        //     'namabarang' => 'required|min:3',
        //     'sj' => 'required|min:3',
        //     'po' => 'required',
        //     'kategori' => 'required',
        //     'vendor' => 'required',
        //     'satuan' => 'required',
        //     'qty' => 'required|numeric|min:1', // Contoh validasi numerik dengan minimal nilai 1
        // ], [
        //     'tanggal.required' => 'Tanggal harus diisi.',
        //     'tanggal.date' => 'Format tanggal tidak valid.',
        //     'namabarang.required' => 'Nama barang harus diisi.',
        //     'namabarang.min' => 'Nama barang minimal harus 3 karakter.',
        //     'sj.required' => 'Kolom SJ harus diisi.',
        //     'sj.min' => 'Kolom SJ minimal harus 3 karakter.',
        //     'po.required' => 'Isikan vendor Terlebih Dahulu',
        //     'vendor.required' => 'Isikan vendor Terlebih Dahulu',
        //     'kategori.required' => 'Isikan kategori Terlebih Dahulu',
        //     'satuan.required' => 'Satuan harus dipilih.',
        //     'qty.required' => 'Qty harus diisi.',
        //     'qty.numeric' => 'Qty harus berupa angka.',
        //     'qty.min' => 'Qty minimal harus 1.',
        // ]);

        // if (!$validasi) {
        //     return redirect()->back()->with('message', 'Gagal menambahkan data. Silakan coba lagi.');
        // }

        $edit = Kedatangan::find($id);
        if ($edit) {
            $qtySebelumnya = $edit->qty_kedatangan;
            $edit->where('id', $id)->update([
                'tanggal' => $request->tanggal,
                'data_barang_id' => $request->namabarang,
                'sj' => $request->sj,
                'po' => $request->po,
                'vendor_id' => $request->vendor,
                'kategori' => $request->kategori,
                'distributor' => $request->distributor,
                'transporter' => $request->transporter,
                'satuan' => $request->satuan,
                'qty_kedatangan' => $request->qty,
            ]);
            $perubahanQty = $request->qty - $qtySebelumnya;

            // Sinkronisasi qty di DataBarang
            $dataBarang = DataBarang::find($request->namabarang);
            if ($dataBarang) {
                $dataBarang->qty += $perubahanQty;
                $dataBarang->save();
            }

            return redirect()->back()->with('success', 'Data berhasil diubah!');

        }

        return redirect()->back()->with('error', 'Data Kedatangan tidak ditemukan!');
    }
}
