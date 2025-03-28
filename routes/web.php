<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PharmacieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/blogs', [SiteController::class, 'allBlogs'])->name('blogs');
Route::get('/blog/{id}', [SiteController::class, 'showBlog'])->name('blog.detail');
// Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');


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

    //pharmacie
    Route::get('/admin/pharmacies', [PharmacieController::class, 'index'])->name('pharmacie.index');
    Route::get('/admin/pharmacies/ajouter', [PharmacieController::class, 'create'])->name('pharmacie.form');
    Route::post('/admin/pharmacies/ajouter', [PharmacieController::class, 'store'])->name('pharmacie.store');
    Route::get('/admin/pharmacies/{id}', [PharmacieController::class, 'show'])->name('pharmacie.show');
    Route::get('/admin/pharmacies/edit/{id}', [PharmacieController::class, 'edit'])->name('pharmacie.edit');
    Route::put('/admin/pharmacies/update/{id}', [PharmacieController::class, 'update'])->name('pharmacie.update');
    Route::delete('/admin/pharmacies/delete/{id}', [PharmacieController::class, 'destroy'])->name('pharmacie.delete');
});


//pour l'envoi de mail avec smtp
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');
Route::get('/pharmacies-de-garde', [PharmacieController::class, 'onDutyPharmacies'])->name('pharmacies.on_duty');
Route::get('/pharmacies-on-duty', function () {
    return view('pharmacies'); // Assurez-vous que le fichier existe dans resources/views/pharmacies.blade.php
})->name('pharmacies');