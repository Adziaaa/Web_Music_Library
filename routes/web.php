<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

Route::get('/', function () {
    return view('searchFor');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/album/{id}', [AlbumController::class, 'show'])->name('album');

    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile');

    Route::get('/playlist/{id}', [PlaylistController::class, 'show'])->name('playlist');
});

require __DIR__.'/auth.php';
