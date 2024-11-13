<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Auth;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{

    public function create(Request $request)
    {
        $user = Auth::user();

        $data = User::findOrFail($user->id);


        return view('informasi', compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'birth_date' => 'required|date',
            'job' => 'required|string',
            'institution' => 'nullable|string',
            'city' => 'nullable|string',
            'status' => 'required|string',
            'education' => 'required|string',
            'emergency_contact' => 'nullable|string',
        ]);

        UserInfo::create([
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'job' => $request->job,
            'institution' => $request->institution,
            'city' => $request->city,
            'status' => $request->status,
            'education' => $request->education,
            'emergency_contact' => $request->emergency_contact,
            'user_id' => auth()->id(), // Mengaitkan dengan pengguna yang sedang login
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}