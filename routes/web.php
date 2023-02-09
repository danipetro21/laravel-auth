<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// rotta non protetta

Route::get('/', [MainController::class, 'home'])
    ->name('home');

// rotta protetta

Route::get('/logged', [MainController::class, 'logged'])->middleware(['auth', 'verified'])->name('logged');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- STORE | CREATE PROTECTED
Route::get('/auth/create', [MainController::class, 'authCreate'])
    ->middleware(['auth', 'verified'])->name('auth.create');
Route::post('/auth/store', [MainController::class, 'authStore'])
    ->middleware(['auth', 'verified'])->name('auth.store');


// --- DELETE
Route::get('/auth/delete/{auth}', [MainController::class, 'authDelete'])
    ->middleware(['auth', 'verified'])->name('auth.delete');

//--- EDIT
Route::get('/auth/edit/{auth}', [MainController::class, 'authEdit'])
    ->middleware(['auth', 'verified'])->name('auth.edit');
//--- UPDATE
Route::post('/auth/update/{auth}', [MainController::class, 'authUpdate'])
    ->middleware(['auth', 'verified'])->name('auth.update');

// --- SHOW
Route::get('/auth/show/{auth}', [MainController::class, 'authShow'])
    ->name('auth.show');

require __DIR__ . '/auth.php';
