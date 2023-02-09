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


require __DIR__ . '/auth.php';
