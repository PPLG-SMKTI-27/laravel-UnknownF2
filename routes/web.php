<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\FormLogin;

Route::get('/', [PortfolioController::class, 'index']);

Route::get('/LandingPage', function () {
    return view('LandingPage', [
        'nama' => request()->input('nama'),
    ]);
});

Route::get('/project', [ProjectController::class, 'index']);

Route::get('/components/siswa', [ComponentController::class, 'index']);

Route::get('/login', [FormLogin::class, 'index'])->name('login');

Route::post('/login', [FormLogin::class, 'prosesLogin'])->name('login.process');

Route::get('/logout', [FormLogin::class, 'logout'])->name('logout');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');