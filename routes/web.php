<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\LibraryController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlaylistController;


Route::get('/library', [LibraryController::class, 'index'])->name('library.index');
Route::get('/albums/{albums}', [AlbumController::class, 'show'])->name('albums.show');
Route::get('/songs/{songs}', [SongController::class, 'show'])->name('songs.show');
Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/playlists', [PlaylistController::class, 'index'])->name('playlists.index');
Route::get('/playlists/{id}', [PlaylistController::class, 'show'])->name('playlists.show');






