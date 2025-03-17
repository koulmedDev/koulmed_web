<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Routes Admin Authentication
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('login.form');
Route::post('/admin/login', [AdminController::class, 'login'])->name('login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('logout');

// Routes Admin Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/index', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/blog/ajouter', function () {
        return view('admin.ajouterblog');
    })->name('blog.form');

    Route::get('/admin/blog/all', function () {
        return view('admin.allblogs');
    })->name('blog.all');

    Route::get('/admin/blog/historique', function () {
        return view('admin.historiqueblog');
    })->name('blog.historique');
});
