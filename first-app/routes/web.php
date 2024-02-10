<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/films', [FilmController::class, 'getAll']);

// Route::get('/films/{id}', [FilmController::class, 'getOne']);

Route::get('/', [FilmController::class, 'welcome']);
Route::get('/films', [FilmController::class, 'getAll']);
Route::get('/film/{id}', [FilmController::class, 'getOne']);
Route::get('/search', [FilmController::class, 'search'])->name('search');


require __DIR__ . '/auth.php';
