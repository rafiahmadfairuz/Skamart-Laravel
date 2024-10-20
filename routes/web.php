<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Logout
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

// Customer
Route::prefix('customer')->middleware(['auth'])->group(function (){
      Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// Admin
Route::prefix('admin')->middleware(['auth'])->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/form-utama', [DashboardController::class, 'formUtama'])->name('form.utama');
    Route::post('/form-utama', [DashboardController::class, 'formUtamaStore'])->name('form.utama.store');
    Route::get('/form-dua', [DashboardController::class, 'formDua'])->name('form.dua');
    Route::post('/form-dua', [DashboardController::class, 'formDuaStore'])->name('form.dua.store');
    Route::get('/form-tiga', [DashboardController::class, 'formTiga'])->name('form.tiga');
    Route::post('/form-tiga', [DashboardController::class, 'formTigaStore'])->name('form.tiga.store');

});
