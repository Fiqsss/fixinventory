<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kedatangans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_barang_id')->nullable();
            $table->string('sj')->nullable();
            $table->string('po')->nullable();
            $table->foreignId('vendor_id')->nullable();
            $table->string('kategori')->nullable();
            $table->string('distributor')->nullable();
            $table->string('transporter')->nullable();
            $table->string('satuan');
            $table->integer('qty_kedatangan')->nullable();
            $table->date('tanggal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kedatangans');
    }
};
