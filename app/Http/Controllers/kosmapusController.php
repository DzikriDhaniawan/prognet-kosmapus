<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\PersonalInformation;
use App\Models\Kost;
use Carbon\Carbon;

class kosmapusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('index');
    }

    public function Login(Request $request)
    {
        // dd($request->all());
        // Validasi input dari form login
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        // Ambil data yang dikirim dari form
        $credentials = $request->only('password'); // Hanya password yang dikirim ke Auth

        // Cek apakah input adalah email atau username
        $user = null;

        if (filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
            // Jika input adalah email
            $user = User::where('email', $request->input('email'))->first();
        } else {
            // Jika input adalah username
            $user = User::where('username', $request->input('email'))->first();
        }

        // Jika user ditemukan dan password valid
        if ($user && Hash::check($request->input('password'), $user->password)) {
            Auth::login($user); // Login pengguna

            // Jika berhasil, redirect ke halaman utama
            return redirect()->intended('/user')->with('success', 'Selamat datang!');
        }

        // Jika gagal, kembalikan ke halaman login dengan error
        return redirect()->back()->withErrors([
            'email' => 'Email atau username dan password salah.',
        ]);
    }

    public function LoginForm()
    {
        return view('auth/login');
    }


    public function daftarAkun(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'terms_accepted' => 'accepted', // Ubah sesuai nama input di form
        ]);

        // Buat akun baru
        $user = new User();
        $user->username = $request->username; // Pastikan Anda menyimpan username
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Enkripsi password
        $user->save();

        // Redirect setelah berhasil daftar
        return redirect('auth/login')->with('success', 'Akun berhasil dibuat. Silakan login!');
    }

    public function daftar()
    {
        return view('auth/daftar');
    }

    public function user()
    {
        return view('user');
    }

    public function detail()
    {
        return view('detail');
    }


    public function koslokasi()
    {
        return view('koslokasi');
    }

    public function lupa()
    {
        return view('auth/Lupa');
    }

    public function Pembayaran()
    {
        return view('pembayaran');
    }

    public function semuakos()
    {
        return view('semuakos');
    }
    public function tentang()
    {
        return view('tentang');
    }

    public function warmadewa()
    {
        return view('warmadewa');
    }

    public function kosseminyak()
    {
        return view('kosseminyak');
    }

    public function universitasudayana()
    {
        return view('universitasudayana');
    }

    public function undiknas()
    {
        return view('undiknas');
    }

    public function itbstikombali()
    {
        return view('itbstikombali');
    }

    public function undiksha()
    {
        return view('undiksha');
    }

    public function mahasaraswati()
    {
        return view('mahasaraswati');
    }

    public function denpasar()
    {
        return view('denpasar');
    }

    public function bangli()
    {
        return view('bangli');
    }

    public function badung()
    {
        return view('badung');
    }

    public function gianyar()
    {
        return view('gianyar');
    }

    public function sanur()
    {
        return view('sanur');
    }

    public function nusadua()
    {
        return view('nusadua');
    }

    public function kuta()
    {
        return view('kuta');
    }

    public function ubud()
    {
        return view('ubud');
    }

    public function gallery()
    {
        return view('gallery');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('informasi'); // Pastikan 'informasi' adalah nama view yang sesuai
    }
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'full_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'birth_date' => 'required|date',
            'job' => 'required|in:student,worker',
            'institution' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
            'education' => 'required|in:sma,s1',
            'emergency_contact' => 'nullable|string|max:20',
        ]);

        // Simpan data ke dalam database
        // Simpan data ke database
        $personalInfo = PersonalInformation::create([
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'job' => $request->job,
            'institution' => $request->institution,
            'city' => $request->city,
            'status' => $request->status,
            'education' => $request->education,
            'emergency_contact' => $request->emergency_contact,
        ]);




        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Informasi berhasil disimpan!');
        return view('show', compact('personalInfo'));
    }




    public function search(Request $request)
    {
        // Validasi input
        $request->validate([
            'lokasi' => 'nullable|string',
            'tanggal_masuk' => 'nullable|date',
            'tanggal_keluar' => 'nullable|date',
            'durasi_sewa' => 'nullable|in:Harian,Bulanan,Tahunan',
            'harga_min' => 'nullable|numeric|min:0', // Validasi harga minimum
            'harga_max' => 'nullable|numeric|min:0', // Validasi harga maksimum
        ]);

        // Bangun query
        $query = Kost::query();

        // Filter lokasi
        if ($request->filled('lokasi')) {
            $query->whereRaw('LOWER(lokasi) LIKE ?', ['%' . strtolower($request->lokasi) . '%']);
        }

        // Format dan filter tanggal
        if ($request->filled('tanggal_masuk')) {
            $tanggalMasuk = Carbon::parse($request->tanggal_masuk)->format('Y-m-d');
            $query->where('tanggal_masuk', '>=', $tanggalMasuk);
        }

        if ($request->filled('tanggal_keluar')) {
            $tanggalKeluar = Carbon::parse($request->tanggal_keluar)->format('Y-m-d');
            $query->where('tanggal_keluar', '<=', $tanggalKeluar);
        }

        // Filter durasi sewa
        if ($request->filled('durasi_sewa')) {
            $query->where('durasi_sewa', $request->durasi_sewa);
        }

        // Filter harga
        if ($request->filled('harga_min')) {
            $query->where('harga', '>=', $request->harga_min);
        }

        if ($request->filled('harga_max')) {
            $query->where('harga', '<=', $request->harga_max);
        }

        // Ambil hasil
        $kosts = $query->get();

        // Kembalikan hasil ke view
        return view('search_results', compact('kosts'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Ambil data berdasarkan ID
        $personalInfo = PersonalInformation::findOrFail($id);


        // Tampilkan halaman show dengan data personalInfo
        return view('informasi.show', compact('personalInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function faq()
    {
        return view('faq');
    }
}

