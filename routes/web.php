<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/gaji/atur/', function () {
    return view('/gaji/atur');
});

Route::get('/kasbon/lihat/', function () {
    return view('/kasbon/lihat');
});