<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\CMSController;
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
// name added to allow use of route directive in blade
Route::get('/search', [FilmController::class, 'search'])->name('search');

Route::middleware(['auth', 'user.role'])->group(function () {
    Route::get('/cms', [CMSController::class, 'index'])->name('cms');
    Route::get('/cms/create', [CMSController::class, 'create'])->name('cms.create');
    Route::get('/cms/{film}/edit', [CMSController::class, 'edit'])->name('cms.edit');
    Route::post('/cms', [CMSController::class, 'store'])->name('cms.store');
    Route::put('/cms/{film}', [CMSController::class, 'update'])->name('cms.update');
    Route::delete('/cms/{film}', [CMSController::class, 'destroy'])->name('cms.destroy');
});



// // name added to allow use of route directive in blade
// Route::get('/cms', [CMSController::class, 'index'])->name('cms');
// // Route to display the edit form
// Route::get('/cms/{film}/edit', [CMSController::class, 'edit'])->name('cms.edit');
// // Route to update the film
// Route::put('/cms/{film}', [CMSController::class, 'update'])->name('cms.update');
// // Route to display the form for creating a new film
// Route::get('/cms/create', [CMSController::class, 'create'])->name('cms.create');
// // Route to store a new film
// Route::post('/cms', [CMSController::class, 'store'])->name('cms.store');
// // Route to delete a film
// Route::delete('/cms/{film}', [CMSController::class, 'destroy'])->name('cms.destroy');

require __DIR__ . '/auth.php';
