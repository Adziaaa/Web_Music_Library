<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

Route::get('/', function () {
    return view('searchFor');
});

Route::get('/album/{id}', [AlbumController::class, 'show'])->name('album');

Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile');

Route::get('/playlist/{id}', [PlaylistController::class, 'show'])->name('playlist');

