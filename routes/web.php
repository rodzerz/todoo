<?php

use Illuminate\Support\Facades\Route;

Route::get('/apple', function () {
    return view('apple');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/mac', function () {
    return view('mac');
});

Route::get('/ipad', function () {
    return view('ipad');
});

