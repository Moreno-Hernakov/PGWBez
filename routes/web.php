<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProjectController;


// =========================================================================================
// FOR MY LANDING
// =========================================================================================

Route::get('/kontak', function () {
    return view('layout.kontak');
});

Route::get('/layanan', function () {
    return view('layout.layanan');
});

Route::get('/staff', function () {
    return view('layout.staff');
});

Route::get('/tentang', function () {
    return view('layout.tentang');
});

Route::get('/portofolio', function () {
    return view('layout.portofolio');
});

// =========================================================================================
// FOR MY ADMIN
// =========================================================================================
Route::get('/admin', function () {
    return view('admin.admin');
});


Route::get('/mastersiswa', [SiswaController::class, 'view']);
Route::post('/mastersiswa', [SiswaController::class, 'data']);

Route::get('/masterkontak', [KontakController::class, 'view']);
Route::post('/masterkontak', [KontakController::class, 'data']);    

Route::get('/masterproject', [ProjectController::class, 'view']);
Route::post('/masterproject', [ProjectController::class, 'data']);

Route::get('/dashboard', function () {
    return view('admin.konten.dashboard');
});



