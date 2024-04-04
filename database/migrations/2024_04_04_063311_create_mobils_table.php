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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('merk_id');
            $table->string('modelmobil_id');
            $table->string('nama_mobil');
            $table->string('gambar_mobil');
            $table->longText('deskripsi_mobil');
            $table->string('nomor_plat')->unique();
            $table->string('harga_sewa');
            $table->enum('jenis',['matic', 'manual']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
