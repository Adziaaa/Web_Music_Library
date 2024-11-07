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
Route::get('/playlist', [PlaylistController::class, 'index'])->name('playlist.index');
Route::get('/playlist/create', [PlaylistController::class, 'create'])->name('playlist.create');
Route::post('/playlist', [PlaylistController::class, 'store'])->name('playlist.store');
Route::get('/playlist/{id}', [PlaylistController::class, 'show'])->name('playlist.show');
Route::post('/playlist/{id}/add-song', [PlaylistController::class, 'addSong'])->name('playlist.addSong');







