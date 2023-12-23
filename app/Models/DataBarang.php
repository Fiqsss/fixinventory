<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function dataKedatangan()
    {
        return $this->hasMany(Kedatangan::class,'data_barang_id');
    }
}
