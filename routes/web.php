<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KosmapusController;
use App\Http\Controllers\FaqController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route untuk halaman utama dan rekomendasi kos
Route::get('/', [KosmapusController::class, 'showRecommendations'])->name('home');

// Route untuk login dan pendaftaran
Route::get('auth/login', [KosmapusController::class, 'LoginForm'])->name('login.form'); // Untuk menampilkan form login
Route::post('auth/login', [KosmapusController::class, 'Login'])->name('login.pp'); // Untuk memproses login
Route::get('auth/daftar', [KosmapusController::class, 'daftar'])->name('daftar.form'); // menampilkan form daftar
Route::post('auth/daftar', [KosmapusController::class, 'daftarAkun'])->name('daftar.store'); // Proses daftar
Route::get('auth/lupa', [KosmapusController::class, 'lupa'])->name('lupa');

// Route untuk user dan detail kost
Route::get('/user', [KosmapusController::class, 'showRecommendations'])->name('user');
Route::get('/kost/{id}', [KosmapusController::class, 'showDetailKost'])->name('kost.show');

// Route untuk halaman lainnya
Route::get('/detail', [KosmapusController::class, 'detail'])->name('user.detail');
Route::get('/informasi', [KosmapusController::class, 'create'])->name('informasi.create'); // Menampilkan form informasi
Route::post('/informasi', [KosmapusController::class, 'store'])->name('informasi.store'); // Menyimpan informasi
Route::get('/informasi/{id}', [KosmapusController::class, 'show'])->name('informasi.show');
Route::get('/koslokasi', [KosmapusController::class, 'koslokasi'])->name('koslokasi');
Route::get('/pembayaran', [KosmapusController::class, 'Pembayaran'])->name('pembayaran');
Route::get('/semuakos', [KosmapusController::class, 'semuakos'])->name('kos.semuakos');
Route::get('/tentang', [KosmapusController::class, 'tentang'])->name('tentang');
Route::post('/search', [KosmapusController::class, 'search'])->name('search');
Route::get('/gallery', [KosmapusController::class, 'gallery'])->name('gallery.create');

// Route untuk lokasi tertentu
Route::get('/warmadewa', [KosmapusController::class, 'warmadewa'])->name('warmadewa');
Route::get('/kosseminyak', [KosmapusController::class, 'kosseminyak'])->name('kosseminyak');
Route::get('/undiknas', [KosmapusController::class, 'undiknas'])->name('undiknas');
Route::get('/itbstikombali', [KosmapusController::class, 'itbstikombali'])->name('itbstikombali');
Route::get('/universitasudayana', [KosmapusController::class, 'universitasudayana'])->name('universitasudayana');
Route::get('/undiksha', [KosmapusController::class, 'undiksha'])->name('undiksha');
Route::get('/mahasaraswati', [KosmapusController::class, 'mahasaraswati'])->name('mahasaraswati');
Route::get('/denpasar', [KosmapusController::class, 'denpasar'])->name('denpasar');
Route::get('/bangli', [KosmapusController::class, 'bangli'])->name('bangli');
Route::get('/badung', [KosmapusController::class, 'badung'])->name('badung');
Route::get('/gianyar', [KosmapusController::class, 'gianyar'])->name('gianyar');
Route::get('/sanur', [KosmapusController::class, 'sanur'])->name('sanur');
Route::get('/nusadua', [KosmapusController::class, 'nusadua'])->name('nusadua');
Route::get('/kuta', [KosmapusController::class, 'kuta'])->name('kuta');
Route::get('/ubud', [KosmapusController::class, 'ubud'])->name('ubud');

// Route untuk FAQ
Route::get('/faq', [KosmapusController::class, 'faq'])->name('faq');
Route::get('/faq', [FaqController::class, 'index']);
Route::post('/faq/store', [FaqController::class, 'store']);
