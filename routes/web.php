<?php

use App\Http\Controllers\AlbumController;
use App\Models\PopularSong;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopularSong_Controller;
use App\Http\Controllers\PopularArtistController;
use App\Http\Controllers\DashboardCOntroller;



Route::get('/', function () {
    return view('welcome');
});

Route::get('list',[PopularSong_Controller::class,'show']);

Route::get('/artists', [PopularArtistController::class, 'show']);

Route::get('/album', [AlbumController::class, 'show']);


Route::get('/dashboard', [DashboardCOntroller::class, 'show']);





Route::get('/test-popularsong', function () {
    $songs = PopularSong::table('popularsong')->get();
    return $songs;
});
