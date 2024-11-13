<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // Menampilkan halaman FAQ
    public function index()
    {
        $faqs = Faq::all();
        return view('faq', compact('faqs'));
    }

    // Menyimpan pertanyaan baru
    public function store(Request $request)
    {
        $request->validate(['question' => 'required|string|max:255']);

        Faq::create(['question' => $request->question]);

        return response()->json(['success' => 'Pertanyaan berhasil ditambahkan!']);
    }
}
