<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('searchFor');
});

Route::get('/Search', function () {
    return view('searchFor');
});
