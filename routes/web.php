<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\{Route, Auth};


Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/property', [HomeController::class, 'property'])->name('property');

Route::view('/about', 'about')->name('about');
Route::view('/property-single', [CommentController::class, 'property-single'])->name('property-single');
Route::post('/property-single', [CommentController::class, 'store'])->name('property-single.store');


Route::view('/contact', [ContactController::class, 'contact'])->name('contact');
// Route::post('/contact',[ContactController::class,'store'])->name('contact.store');


Route::middleware('auth')->group(function () {
    Route::get('book-now', [AdminController::class, 'booked'])->name('owner.book');

    Route::middleware('owner')->group(function () {
        Route::get('owner', [AdminController::class, 'index'])->name('owner.index');
        Route::post('owner', [AdminController::class, 'store'])->name('owner.store');
        Route::get('owner/create', [AdminController::class, 'create'])->name('owner.create');
    });
});
