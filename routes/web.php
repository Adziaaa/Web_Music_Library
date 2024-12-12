<?php
use App\Http\Middleware\CheckGuest;
use App\Models\PopularSong;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\PopularSong_Controller;
use App\Http\Controllers\PopularArtistController;

Route::get('/', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');
    Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');
    Route::get('/websiteRegulations', [HomeController::class, 'rules'])->name('websiteRegulations');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/album/{id}', [AlbumController::class, 'find'])->name('album');

    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile');
});

require __DIR__ . '/auth.php';

Route::get('/test-songs', function () {
    $songs = PopularSong::table('songs')->get();
    return $songs;
});

Route::get('/guest-login', function () {
    $guestUser = \App\Models\User::where('email', 'guest@guest.com')->first();
    Auth::login($guestUser);
    return redirect('/dashboard'); // Redirect to the desired page after login
})->name('guest.login');

Route::middleware(['auth', CheckGuest::class])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/album/{id}', [AlbumController::class, 'find'])->name('album');

    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile');

    Route::get('/index', [PlaylistController::class, 'index'])->name('index');
    Route::get('/create',[PlaylistController::class,'create']);
    Route::post('/store', [PlaylistController::class, 'store'])->name('store');

    Route::get('/edit/{id}', [PlaylistController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [PlaylistController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [PlaylistController::class, 'destroy']);
});
