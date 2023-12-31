<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $guarded =[];
    use HasFactory;

    public function kedatangan()
    {
        return $this->hasMany(Kedatanagan::class);
    }
}
