<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'lokasi', 'alamat', 'latitude', 'longitude', 
        'deskripsi', 'harga', 'tipe', 'tanggal_masuk', 'tanggal_keluar', 'gambar'
    ];
}