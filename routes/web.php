<?php
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);

Route::get('/LandingPage', function () {
    return view('LandingPage', [
        'nama' => request()->input('nama'),
    ]);
});

use App\Http\Controllers\projectController;

Route::get('/project', [projectController::class, 'index']);

use App\Http\Controllers\ComponentController;
Route::get('/components/siswa', [ComponentController::class, 'index']);

