<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\searchFor;

Route::get('/', function () {
    return view('searchFor');
});

Route::get('/album/{title}',[searchFor::class, 'albumSearch'])->name('albumPage');

