<?php

use App\Http\Controllers\AlbumController;
use App\Models\PopularSong;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopularSong_Controller;
use App\Http\Controllers\PopularArtistController;
use App\Http\Controllers\HomeCOntroller;



Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [HomeCOntroller::class, 'show']);




Route::get('/test-songs', function () {
    $songs = PopularSong::table('songs')->get();
    return $songs;
});
