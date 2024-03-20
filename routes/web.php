<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/landing2', function () {
    return view('landing2');
});

Route::get('/landing3', function () {
    return view('landing3');
});

Route::get('/landing4', function () {
    return view('landing4');
});


Route::get('/category1', function () {
    return view('category1');
});

Route::get('/category2', function () {
    return view('category2');
});

Route::get('/category3', function () {
    return view('category3');
});

Route::get('/category4', function () {
    return view('category4');
});

Route::get('/category5', function () {
    return view('category5');
});

Route::get('/category6', function () {
    return view('category6');
});

Route::get('/category7', function () {
    return view('category7');
});

Route::get('/favorite', function () {
    return view('favorite');
});

Route::get('/favempty', function () {
    return view('favempty');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('history', function () {
    return view('history');
});

Route::get('user_profile', function () {
    return view('profile');
});

Route::get('about', function () {
    return view('about');
});

Route::get('view', function () {
    return view('view');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
