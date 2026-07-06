<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ============================================
// TUGAS 1: Rute Dasar
// ============================================
Route::get('/', function () {
    return 'Selamat datang di aplikasi Laravel!';
});

// ============================================
// TUGAS 2: Rute dengan Parameter (nama dan npm)
// ============================================
Route::get('/sapa/{name}/{npm}', function ($name, $npm) {
    return 'Halo, ' . $name . ' ' . $npm . '!';
});

// ============================================
// TUGAS 3 & 4: Menggunakan Controller GreetingsController
// ============================================

// Rute dasar ke metode welcome() di GreetingsController
Route::get('/greet', [GreetingsController::class, 'welcome']);

// Rute dengan parameter ke metode greet() di GreetingsController
Route::get('/greet/{name}/{npm}', [GreetingsController::class, 'greet']);

// ============================================
// RUTE UNTUK MODUL 3 - VIEWS DAN BLADE
// ============================================

// Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Halaman Profil (menampilkan Nama dan NPM)
Route::get('/profil', [HomeController::class, 'profil']);

// Halaman Pendidikan (menampilkan Kampus dan Prodi)
Route::get('/pendidikan', [HomeController::class, 'pendidikan']);

// Halaman Keahlian (menampilkan skill)
Route::get('/keahlian', [HomeController::class, 'keahlian']);