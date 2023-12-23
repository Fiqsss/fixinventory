<?php

namespace App\Livewire\Barangmasuk;

use App\Models\Vendor;
use Livewire\Component;
use App\Models\DataBarang;
use App\Models\Kedatangan;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $paginate = 10;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.barangmasuk.index',
        [
            'barangs' => DataBarang::all(),
            'kedatangans' => Kedatangan::latest()->paginate($this->paginate),
            'vendors' => Vendor::latest()->paginate($this->paginate),
        ]);
    }

    public function deleteKedatangan($id)
    {
        $kedatangan = Kedatangan::find($id);
        if($kedatangan)
        {
            $qtyKedatangan = $kedatangan->qty_kedatangan;
            $stock = DataBarang::find($kedatangan->data_barang_id);
            if ($stock) {
                $stock->qty -= $qtyKedatangan;
                $stock->save();
            }
        }
        $kedatangan->where('id',$id)->delete();
    }
}
