<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class DataBarangController extends Controller
{
    public function index()
    {

        return view('page.databarang',[
            'title' => 'databarang',
            'barangs' => DataBarang::latest()->paginate()
        ]);
    }
}
