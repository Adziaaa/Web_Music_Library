<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\SongController;
use App\Http\Controllers\Api\PlaylistController;
use App\Http\Controllers\Api\AlbumController;
use App\Http\Controllers\Api\ArtistController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

// Public routes
Route::post('/auth/token', [AuthController::class, 'generateToken']);

Route::middleware(['auth:sanctum'])->group(function () {
    // // Protected User API routes
    // Route::get('/users', [UserController::class, 'index']);
    // Route::get('/users/{id}', [UserController::class, 'show']);

    // // Protected Song API routes
    // Route::get('/songs', [SongController::class, 'index']);
    // Route::get('/songs/{id}', [SongController::class, 'show']);

    // // Protected Artist API routes
    // Route::get('/artists', [ArtistController::class, 'index']);
    // Route::get('/artists/{id}', [ArtistController::class, 'show']);

    // // Protected Album API routes
    // Route::get('/albums', [AlbumController::class, 'index']);
    // Route::get('/albums/{id}', [AlbumController::class, 'show']);

    // // Protected Playlist API routes
    // Route::get('/playlists', [PlaylistController::class, 'index']);
    // Route::get('/playlists/{id}', [PlaylistController::class, 'show']);
    // Route::post('/playlists', [PlaylistController::class, 'store']);
    // Route::put('/playlists/{id}', [PlaylistController::class, 'update']);
    // Route::delete('/playlists/{id}', [PlaylistController::class, 'destroy']);

    // Artists
    Route::apiResource('artists', ArtistController::class);

    // Albums
    Route::apiResource('albums', AlbumController::class);

    // Songs
    Route::apiResource('songs', SongController::class);

    // Playlists
    Route::apiResource('playlists', PlaylistController::class);

    // Logout route
    Route::post('/auth/logout', [AuthController::class, 'logout']);
});
