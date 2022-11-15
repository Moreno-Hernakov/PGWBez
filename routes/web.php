<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginController;


// =======================================
// ========== FOR MY LANDING  ============ 
// =======================================
Route::middleware('guest')->group(function () {
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

    Route::get('/login', [loginController::class, 'login'])->name('login')->middleware('guest');;
    Route::post('/login', [loginController::class, 'auth']);
});


// =======================================
// ============ FOR MY ADMIN  ============ 
// =======================================
Route::get('/admin', function () {
    return view('admin.admin');
});


Route::middleware('auth')->group(function () {
    Route::resource('/mastersiswa', siswaController::class)->middleware('auth');
    
    // note: KONTAK CONTROLLER
    Route::resource('/masterkontak', KontakController::class); 
    Route::get('/showkontak/{id}', [KontakController::class, 'showKontak']);
    Route::post('/addjenis', [KontakController::class, 'storeJenis']);
    Route::post('/deletejenis/{id}', [KontakController::class, 'deleteJenis']);
    Route::post('/updatejenis', [KontakController::class, 'updateJenis']);

    // note: PROJECT CONTROLLER
    Route::get('/masterproject', [ProjectController::class, 'view']);
    Route::get('/addProject/{id}', [ProjectController::class, 'create']);
    Route::post('/storeProject', [ProjectController::class, 'store']);
    Route::get('/editProject/{id}', [ProjectController::class, 'edit']);
    Route::post('/updateProject', [ProjectController::class, 'update']);
    Route::post('/updateProject', [ProjectController::class, 'update']);
    Route::get('/deleteProject/{id}', [ProjectController::class, 'destroy']);
    Route::get('/getData/{id}', [ProjectController::class, 'data']);
    Route::get('/logout', [loginController::class, 'logout']);
    
    Route::resource('/dashboard', dashboardController::class);
});
// Route::get('/mastersiswa', [SiswaController::class, 'view']);
// Route::post('/mastersiswa', [SiswaController::class, 'data']);







// Route::get('/dashboard', function () {
//     return view('admin.konten.dashboard');
// });




