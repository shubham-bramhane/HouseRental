<?php

use App\Http\Controllers\{
    AdminController,
    PropertyController,
    CommentController,
    ContactController,
    HomeController
};
use Illuminate\Support\Facades\{Route, Auth};

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('property', [HomeController::class, 'property'])->name('property');

Route::view('about', 'about')->name('about');
Route::get('property/{id}/show', [PropertyController::class, 'show'])->name('property.show');
Route::post('property-single', [CommentController::class, 'store'])->name('property-single.store');

Route::view('contact', [ContactController::class, 'contact'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware('auth')->group(function () {
    Route::get('book-now/{id}', [AdminController::class, 'booked'])->name('owner.book');
    Route::delete('book-cancel/{id}', [AdminController::class, 'cancelByUser'])->name('tenant.cancel');
    Route::get('tenant-list', [AdminController::class, 'list'])->name('tenant.list');


    Route::middleware('owner')->group(function () {
        Route::get('owner', [PropertyController::class, 'index'])->name('owner.index');
        Route::post('owner', [PropertyController::class, 'store'])->name('owner.store');
        Route::get('owner/create', [PropertyController::class, 'create'])->name('owner.create');
        Route::delete('owner/{id}', [PropertyController::class, 'destroy'])->name('owner.destroy');
        Route::get('owner/tenant-list', [PropertyController::class, 'list'])->name('owner.tenant.list');
        Route::delete('owner-cancel/{id}', [AdminController::class, 'cancel'])->name('owner.cancel');
    });
});
