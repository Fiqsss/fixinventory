<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;

class vendorController extends Controller
{
    public function index()
    {
        return view('page.vendor', ['vendors' => Vendor::latest(), 'title' => 'Vendor']);
    }

    public function addvendor(Request $request)
    {
        $validasi = $request->validate([
            'namavendor' => 'required',
            'alamat' => 'required'
        ],[
            'namavendor.required' => 'tolong isi Nama Vendor terlebih dahulu',
            'alamat.required' => 'tolong isi Alamat terlebih dahulu'
        ]);

        if(!$validasi)
        {
            return redirect()->back()->with('message' , 'gagal menambahkan');
        }


        Vendor::create([
            'namavendor' => $request->namavendor,
            'alamat' => $request->alamat,
        ]);
        return redirect()->back()->with('success', 'Data vendor berhasil di tambah');
    }

    public function editVendor(Request $request ,$id)
    {

        $validasi = $request->validate([
            'namabarang' => 'required',
            'alamat' => 'required'
        ],[
            'namabarang.required' => 'Nama Vendor tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
        ]);

        if(!$validasi)
        {
            return redirect()->back()->with('mesage' , 'gagal mengubah data vendor');
        }

        $vendor  = Vendor::find($id);
        $vendor->update([
            'namavendor' => $request->namavendor,
            'alamat' => $request->alamat
        ]);

        return redirect()->back()->with('success', 'Data Vendor berhasil ditambahkan');
    }
}
