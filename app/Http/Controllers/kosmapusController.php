<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\PersonalInformation;
use App\Models\Kost;
use App\Models\DetailKost;
use Carbon\Carbon;

class KosmapusController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function showDetailKost($id)
    {
        $detailKost = DetailKost::findOrFail($id);
        return view('detail', compact('detailKost'));
    }

    public function showRecommendations()
    {
        $rekomendasiKost = DetailKost::all();
        ($rekomendasiKost);
        return view('user', compact('rekomendasiKost'));
    }

    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('password');
        $user = null;

        if (filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
            $user = User::where('email', $request->input('email'))->first();
        } else {
            $user = User::where('username', $request->input('email'))->first();
        }

        if ($user && Hash::check($request->input('password'), $user->password)) {
            Auth::login($user);
            return redirect()->intended('/user')->with('success', 'Selamat datang!');
        }

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
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'terms_accepted' => 'accepted',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('auth/login')->with('success', 'Akun berhasil dibuat. Silakan login!');
    }

    public function daftar()
    {
        return view('auth/daftar');
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

    public function create()
    {
        return view('informasi');
    }

    public function store(Request $request)
    {
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

        return redirect()->back()->with('success', 'Informasi berhasil disimpan!');
    }

    public function search(Request $request)
    {
        $request->validate([
            'lokasi' => 'nullable|string',
            'tanggal_masuk' => 'nullable|date',
            'tanggal_keluar' => 'nullable|date',
            'durasi_sewa' => 'nullable|in:Harian,Bulanan,Tahunan',
            'harga_min' => 'nullable|numeric|min:0',
            'harga_max' => 'nullable|numeric|min:0',
        ]);

        $query = Kost::query();

        if ($request->filled('lokasi')) {
            $query->whereRaw('LOWER(lokasi) LIKE ?', ['%' . strtolower($request->lokasi) . '%']);
        }

        if ($request->filled('tanggal_masuk')) {
            $tanggalMasuk = Carbon::parse($request->tanggal_masuk)->format('Y-m-d');
            $query->where('tanggal_masuk', '>=', $tanggalMasuk);
        }

        if ($request->filled('tanggal_keluar')) {
            $tanggalKeluar = Carbon::parse($request->tanggal_keluar)->format('Y-m-d');
            $query->where('tanggal_keluar', '<=', $tanggalKeluar);
        }

        if ($request->filled('durasi_sewa')) {
            $query->where('durasi_sewa', $request->durasi_sewa);
        }

        if ($request->filled('harga_min')) {
            $query->where('harga', '>=', $request->harga_min);
        }

        if ($request->filled('harga_max')) {
            $query->where('harga', '<=', $request->harga_max);
        }

        $kosts = $query->get();

        return view('search_results', compact('kosts'));
    }

    public function show(string $id)
    {
        $personalInfo = PersonalInformation::findOrFail($id);
        return view('informasi.show', compact('personalInfo'));
    }

    public function faq()
    {
        return view('faq');
    }
}
