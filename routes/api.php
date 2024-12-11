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
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{id}', [UserController::class, 'show']);
    
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
