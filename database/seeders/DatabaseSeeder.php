<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('vendors')->insert([
            [
                'namavendor' => 'PT. Purbarutama',
                'alamat' => 'Kudus',
            ],
            [
                'namavendor' => 'PT. Wahyu Abaditama',
                'alamat' => 'Jakarta',
            ],
            [
                'namavendor' => 'CV. Marlin Ekatama',
                'alamat' => 'Jakarta',
            ],
            [
                'namavendor' => 'PT. artindo tatawarna',
                'alamat' => 'Jakarta',
            ],
        ]);
        DB::table('data_barangs')->insert([
            [
                'namabarang' => 'Oterpack SP UNL',
                'qty' => 10,
            ],
            [
                'namabarang' => 'Oterpack SP 10GB',
                'qty' => 100,
            ],
        ]);

        DB::table('kedatangans')->insert([
            [
                'data_barang_id' => 1,
                'sj' => 'sj/112345',
                'po' => '12000856',
                'vendor_id' => '1',
                'kategori' => 'Packaging',
                'distributor' => '',
                'transporter' => 'GED',
                'satuan' => 'pcs',
                'qty_kedatangan' => 10
            ],
            [
                'data_barang_id' => 2,
                'sj' => 'sj/11111',
                'po' => '12000111',
                'vendor_id' => '1',
                'kategori' => 'Packaging',
                'distributor' => '',
                'transporter' => 'GED',
                'satuan' => 'pcs',
                'qty_kedatangan' => 100
            ],
        ]);
    }
}
