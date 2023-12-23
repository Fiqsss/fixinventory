<?php

namespace App\Livewire\Vendor;

use App\Models\Vendor;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $paginate = 10;
    public function render()
    {

        return view('livewire.vendor.index',['vendors' => Vendor::latest()->paginate($this->paginate)]);
    }

    public function deletevendor($id)
    {
        Vendor::find($id)->where('id' ,$id)->delete();
    }

}
