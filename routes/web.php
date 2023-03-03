<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\MasyarakatController;

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
Route::get('/', function () {
    return view('home');
})->name('home')->middleware('guest:masyarakat,petugas');

// Authentication
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest:petugas,masyarakat');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate')->middleware('guest:petugas,masyarakat');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth:petugas,masyarakat');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('checkGuard:petugas,masyarakat');
Route::get('/register', [MasyarakatController::class, 'index'])->name('register')->middleware('guest:petugas,masyarakat');
Route::post('/register', [MasyarakatController::class, 'store'])->name('register-post')->middleware('guest:petugas,masyarakat');

// Dashboard Masyarakat
Route::get('/form', function () {
    return view('masyarakat.form'); 
})->name('pengaduan')->middleware('checkGuard:masyarakat');
Route::get('/pengaduan', [PengaduanController::class, 'indexMasyarakat'])->middleware('checkGuard:masyarakat');
Route::get('/pengaduan/{pengaduan:id_pengaduan}/detail', [PengaduanController::class, 'showMasyarakat'])->middleware('checkGuard:masyarakat')->name('masyarakat.pengaduan.detail');
Route::resource('/pengaduan', PengaduanController::class);

// Dashboard Petugas
Route::get('/dashboard/masyarakat', [MasyarakatController::class, 'indexMasyarakat'])->name('petugas.masyarakat.index')->middleware('checkGuard:petugas');
Route::get('/dashboard/pengaduan', [PengaduanController::class, 'index'])->name('petugas.pengaduan.index')->middleware('checkGuard:petugas');
Route::get('/dashboard/pengaduan/{pengaduan:id_pengaduan}', [PengaduanController::class, 'show'])->name('petugas.pengaduan.show')->middleware('checkGuard:petugas');
Route::get('/dashboard/petugas', [PetugasController::class, 'index'])->name('petugas.petugas.index')->middleware('checkGuard:petugas');
Route::put('/dashboard/pengaduan/{pengaduan:id_pengaduan}', [PengaduanController::class, 'verification'])->name('petugas.pengaduan.verification')->middleware('checkGuard:petugas');
Route::get('/dashboard/tanggapan/{pengaduan:id_pengaduan}', [TanggapanController::class, 'create'])->name('petugas.tanggapan.create')->middleware('checkGuard:petugas');
Route::put('/dashboard/tanggapan/{pengaduan:id_pengaduan}', [TanggapanController::class, 'store'])->name('petugas.tanggapan.store')->middleware('checkGuard:petugas');
Route::get('/dashboard/tanggapan', [TanggapanController::class, 'index'])->name('petugas.tanggapan.index')->middleware('checkGuard:petugas');
Route::get('/dashboard/petugas/create', [PetugasController::class, 'create'])->name('petugas.petugas.create')->middleware('auth:masyarakat,petugas', 'isAdmin');
Route::post('/dashboard/petugas/store', [PetugasController::class, 'store'])->name('petugas.petugas.store')->middleware('auth:masyarakat,petugas', 'isAdmin');

Route::get('/tes', function () {
    return view('index');
});