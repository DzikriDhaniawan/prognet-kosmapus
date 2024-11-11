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
        Schema::create('kosts', function (Blueprint $table) {
            $table->id();
            $table->string('nama');  // Nama kost
            $table->string('lokasi');  // Lokasi kost
            $table->text('alamat');  // Alamat lengkap kost
            $table->decimal('latitude', 10, 8)->nullable();  // Latitude
            $table->decimal('longitude', 11, 8)->nullable();  // Longitude
            $table->text('deskripsi')->nullable();  // Deskripsi kost
            $table->decimal('harga', 10, 2);  // Harga kost
            $table->enum('tipe', ['Pria', 'Wanita', 'Campur']);  // Tipe kost
            $table->date('tanggal_masuk');  // Tanggal kost tersedia
            $table->date('tanggal_keluar');  // Tanggal kost tidak lagi tersedia
            $table->enum('durasi_sewa', ['Harian', 'Bulanan', 'Tahunan'])->default('Bulanan');  // Durasi sewa kost
            $table->string('gambar')->nullable();  // URL gambar kost
            $table->timestamps();  // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kosts');
    }
};
