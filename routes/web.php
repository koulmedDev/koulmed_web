<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/blogs', [SiteController::class, 'allBlogs'])->name('blogs');
Route::get('/blog/{id}', [SiteController::class, 'showBlog'])->name('blog.detail');

// Routes Admin Authentication
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('login.form');
Route::post('/admin/login', [AdminController::class, 'login'])->name('login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('logout');

// Routes Admin Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/index', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Blog routes
    Route::get('/admin/blog/ajouter', [BlogController::class, 'showAddForm'])->name('blog.form');
    Route::post('/admin/blog/ajouter', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/admin/blog/all', [BlogController::class, 'showAllBlogs'])->name('blog.all');
    Route::get('/admin/blog/show/{id}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('/admin/blog/historique', [BlogController::class, 'showBlogHistory'])->name('blog.historique');
    Route::get('/admin/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/admin/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/admin/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
});
