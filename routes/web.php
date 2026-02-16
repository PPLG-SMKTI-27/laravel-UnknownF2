<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\FormLogin;
use App\Http\Controllers\ProfileController;


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

Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index']);

Route::get('/projects/debug', [App\Http\Controllers\ProjectController::class, 'debug'])->name('projects.debug');
Route::get('/projects/json', [App\Http\Controllers\ProjectController::class, 'json'])->name('projects.json');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';