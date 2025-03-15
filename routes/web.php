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


Route::get('/admin/blog/ajouter', function () {
    return view('admin.ajouterblog');
})->name('blog.form');

Route::get('/admin/blog/all', function () {
    return view('admin.allblogs');
})->name('blog.all');

Route::get('/admin/blog/historique', function () {
    return view('admin.historiqueblog');
})->name('blog.historique');