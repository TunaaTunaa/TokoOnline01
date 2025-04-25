<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;

// Halaman utama, arahkan ke login
Route::get('/', function () {
    return redirect()->route('backend.login');
});

// Halaman beranda setelah login
Route::get('backend/beranda', [BerandaController::class, 'berandaBackend'])->name('backend.beranda')->middleware('auth');

// Halaman login
Route::get('backend/login', [LoginController::class, 'loginBackend'])->name('backend.login');
Route::post('backend/login', [LoginController::class, 'authenticateBackend'])->name('backend.login');

// Halaman register
Route::get('backend/register', [LoginController::class, 'registerBackend'])->name('backend.register');
Route::post('backend/register', [LoginController::class, 'storeBackend'])->name('backend.register.store');

// Halaman logout
Route::post('backend/logout', [LoginController::class, 'logoutBackend'])->name('backend.logout');