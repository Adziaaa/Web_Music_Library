<?php

use App\Models\PopularSong;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\PopularSong_Controller;
use App\Http\Controllers\PopularArtistController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/album/{id}', [AlbumController::class, 'find'])->name('album');

    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile');

    Route::get('/playlist/{id}', [PlaylistController::class, 'show'])->name('playlist');
});

require __DIR__.'/auth.php';

Route::get('/home', [HomeCOntroller::class, 'show']);

Route::get('/test-songs', function () {
    $songs = PopularSong::table('songs')->get();
    return $songs;
});



Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/websiteRegulations', [HomeController::class, 'rules'])->name('websiteRegulations');

