<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('login.form');

Route::get('/admin/index', function () {
    return view('admin.index');
});
