<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kost;

class KostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kost::create([
            'nama' => 'Kost Denpasar',
            'lokasi' => 'Denpasar',
            'alamat' => 'Jl. Sudirman No.10, Denpasar, Bali',
            'latitude' => '-8.6500',
            'longitude' => '115.2167',
            'deskripsi' => 'Kost nyaman dan dekat dengan pusat kota Denpasar',
            'harga' => 1500000.00,
            'tipe' => 'Campur',
            'tanggal_masuk' => '2024-10-01',
            'tanggal_keluar' => '2024-11-01',
            'durasi_sewa' => 'Bulanan',  // Opsi durasi sewa: 'Harian', 'Bulanan', atau 'Tahunan'
            'gambar' => 'kos_denpasar.jpg'
        ]);
    }
}