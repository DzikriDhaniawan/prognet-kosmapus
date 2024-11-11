<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kosmapusController;

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

Route::resource('/', KosmapusController::class);
Route::get('auth/login', [KosmapusController::class, 'LoginForm'])->name('login.form'); // Untuk menampilkan form login
Route::post('auth/login', [KosmapusController::class, 'Login'])->name('login'); // Untuk memproses login
Route::get('auth/daftar', [KosmapusController::class, 'daftar'])->name('daftar.form'); // menampilkan form daftar
Route::post('auth/daftar', [KosmapusController::class, 'daftarAkun'])->name('daftar.store'); // Proses daftar
Route::get('/user', [KosmapusController::class, 'user'])->name('user');
Route::get('/detail', [KosmapusController::class, 'detail'])->name('user.detail');
// Route untuk menampilkan form informasi
Route::get('/informasi', [KosmapusController::class, 'create'])->name('informasi.create');
// Route untuk menyimpan informasi
Route::post('/informasi', [KosmapusController::class, 'store'])->name('informasi.store');
Route::get('/koslokasi', [KosmapusController::class, 'koslokasi'])->name('koslokasi');
Route::get('auth/lupa', [KosmapusController::class, 'lupa'])->name('lupa');
Route::get('/pembayaran', [KosmapusController::class, 'pembayaran'])->name('pembayaran');
Route::get('/semuakos', [KosmapusController::class, 'semuakos'])->name('kos.semuakos');
Route::get('/tentang', [KosmapusController::class, 'tentang'])->name('tentang');
Route::post('/search', [KosmapusController::class, 'search'])->name('search');
Route::get('/warmadewa', [KosmapusController::class, 'warmadewa'])->name('warmadewa');
Route::get('/kosseminyak', [KosmapusController::class, 'kosseminyak'])->name('kosseminyak');
Route::get('/undiknas', [KosmapusController::class, 'undiknas'])->name('undiknas');
Route::get('/itbstikombali', [KosmapusController::class, 'itbstikombali'])->name('itbstikombali');
Route::get('/universitasudayana', [KosmapusController::class, 'universitasudayana'])->name('universitasudayana');
Route::get('/universitasudayana', [KosmapusController::class, 'universitasudayana'])->name('universitasudayana');
Route::get('/undiknas', [KosmapusController::class, 'undiknas'])->name('undiknas');
Route::get('/universitasudayana', [KosmapusController::class, 'universitasudayana'])->name('universitasudayana');
Route::get('/itbstikombali', [KosmapusController::class, 'itbstikombali'])->name('itbstikombali');
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

Route::get('/informasi', [KosmapusController::class, 'create'])->name('informasi.create');
Route::post('/informasi/store', [KosmapusController::class, 'store'])->name('informasi.store');
Route::get('/informasi/{id}', [KosmapusController::class, 'show'])->name('informasi.show');
