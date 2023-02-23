<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;
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
})->name('home');

Route::resource('/pengaduan', PengaduanController::class);

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest:petugas,masyarakat');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth:petugas,masyarakat');

Route::get('/form', function () {
    return view('masyarakat.form');
})->middleware(['auth:petugas,masyarakat', 'checkGuard:masyarakat']);

Route::get('/register', [MasyarakatController::class, 'index'])->name('register');
Route::post('/register', [MasyarakatController::class, 'store'])->name('register-post');