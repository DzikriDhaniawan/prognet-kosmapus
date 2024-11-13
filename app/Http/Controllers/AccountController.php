<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function showAccount()
    {
        // Ambil informasi pengguna yang terhubung dengan user yang sedang login
        $userInfo = UserInfo::where('user_id', Auth::id())->first();

        // Tampilkan view dengan data pengguna
        return view('account', compact('userInfo'));
    }
}
