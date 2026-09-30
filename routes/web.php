<?php

use App\Http\Controllers\SuratKeluarController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (!Auth::check()) {
        return redirect()->route('login');
    }
    return redirect()->route(Auth::user()->role === 'kepala' ? 'dashboard.kepala' : 'dashboard.admin');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', fn () => view('dashboardmin.admin'))
        ->middleware(RoleMiddleware::class . ':admin')
        ->name('dashboard.admin');

    Route::get('/dashboard-kepala', fn () => view('dashboardkep.kepala'))
        ->middleware(RoleMiddleware::class . ':kepala')
        ->name('dashboard.kepala');

    Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('surat-masuk.index');
    Route::post('/surat-masuk', [SuratMasukController::class, 'store'])->name('surat-masuk.store');
    Route::get('/surat-masuk/{id}/edit', [SuratMasukController::class, 'edit'])->name('surat-masuk.edit');
    Route::get('/surat-masuk/{id}/cetak', [SuratMasukController::class, 'cetak'])->name('surat-masuk.cetak');
    Route::put('/surat-masuk/{id}', [SuratMasukController::class, 'update'])->name('surat-masuk.update');
    Route::delete('/surat-masuk/{id}', [SuratMasukController::class, 'destroy'])->name('surat-masuk.destroy');

    Route::get('/surat-keluar', [SuratKeluarController::class, 'index'])->name('surat-keluar.index');
    Route::post('/surat-keluar', [SuratKeluarController::class, 'store'])->name('surat-keluar.store');
    Route::get('/surat-keluar/{id}/edit', [SuratKeluarController::class, 'edit'])->name('surat-keluar.edit');
    Route::get('/surat-keluar/{id}/cetak', [SuratKeluarController::class, 'cetak'])->name('surat-keluar.cetak');
    Route::put('/surat-keluar/{id}', [SuratKeluarController::class, 'update'])->name('surat-keluar.update');
    Route::delete('/surat-keluar/{id}', [SuratKeluarController::class, 'destroy'])->name('surat-keluar.destroy');

    Route::get('/surat-tugas', function () { return view('surat.surat_tugas'); });
});