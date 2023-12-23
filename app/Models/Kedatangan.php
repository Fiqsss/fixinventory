<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kedatangan extends Model
{
    use HasFactory;
    public $table = "kedatangans";
    protected $guarded = [];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function dataBarang()
    {
        return $this->belongsTo(DataBarang::class);
    }
}
