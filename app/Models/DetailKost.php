<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKost extends Model
{
    use HasFactory;

    protected $table = 'detailkost'; // Nama tabel sesuai dengan database
    protected $primaryKey = 'idKost';
    protected $fillable = [
        'namaKost',
        'alamatKost',
        'fotoKost1',
        'fotoKost2',
        'fotoKost3',
        'fotoKost4',
        'fotoKost5',
        'hargaKost',
        'tagKost',
        'fasilitasKost1',
        'fasilitasKost2',
        'fasilitasKost3',
        'fasilitasKost4',
        'fasilitasKost5',
        'aturanKost1',
        'aturanKost2',
        'aturanKost3',
        'aturanKost4',
        'aturanKost5',
        'googleMapsKost',
    ];
}
