<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk_id',
        'modelmobil_id',
        'nama_mobil',
        'nama_mobil',
        'gambar_mobil',
        'deskripsi_mobil',
        'nomor_plat',
        'harga_sewa',
        'jenis',
    ];
}
