<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ProfessionDetailController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/login', function () {
    return view('Backend.autentikasi.login');
});

Route::get('/coba', function () {
    return view('Frontend.daftar_karyawan.index');
})->name('daftar-lanjutan');

Route::get('/lowongan', function () {
    return view('Backend.Admin.Lowongan.index');
});

Route::get('/pendaftar', function () {
    return view('Backend.Admin.Pendaftar.index');
});

Route::get('daftar_pekerja', [RegisteredUserController::class, 'Pekerja'])->name('daftar_pekerja');
Route::post('/register-pekerja', [RegisteredUserController::class, 'registerPekerja'])->name('store_pekerja');
Route::post('/job-seeker-register', [RegisteredUserController::class, 'registerJobSeeker'])->name('job_seeker_register');

// admin
Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('admin.index');
    Route::resource('profession', ProfessionController::class);
    Route::post('/profession-details', [ProfessionDetailController::class, 'store'])->name('profession-details.store');
    Route::put('/profession-details/{id}', [ProfessionDetailController::class, 'update'])->name('profession-details.update');
    Route::delete('/profession-details/{id}', [ProfessionDetailController::class, 'destroy'])->name('profession-details.destroy');
});

// jobSeeker
Route::middleware(['auth', 'checkrole:job_seekers'])->group(function () {

    Route::get('/dd', function () {
        return view('Frontend.daftar_karyawan.landing');
    })->name('landing-jobSeeker');
});
require __DIR__ . '/auth.php';
