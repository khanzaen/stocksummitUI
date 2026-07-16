<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/archive/2025', function () {
    return view('archive.2025');
});
