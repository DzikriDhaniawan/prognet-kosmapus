<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailKost; // Impor model DetailKost

class KostDetailController extends Controller
{
    // Metode untuk menampilkan detail kost berdasarkan ID
    public function show($id)
    {
        // Mengambil data detail kost berdasarkan ID
        $detailKost = DetailKost::find($id);

        // Memeriksa apakah data ditemukan
        if (!$detailKost) {
            abort(404, 'Detail kost tidak ditemukan');
        }

        // Mengembalikan view dengan data detail kost
        return view('detail', compact('detailKost'));
    }

    
}
