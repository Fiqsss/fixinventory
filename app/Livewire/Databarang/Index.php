<?php

namespace App\Livewire\Databarang;

use Livewire\Component;
use App\Models\DataBarang;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.databarang.index',[
            'barangs' => DataBarang::latest()->paginate()
        ]);
    }
}
