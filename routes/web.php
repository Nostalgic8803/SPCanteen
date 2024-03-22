<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/loginpage', function () {
    return view('loginpage');  // welcome.blade.php
});

Route::get('/forgotpassword', function () {
    return view('forgotPassword');
});

Route::get('/registerpage', function () {
    return view('registerpage');
});

Route::get('/setupprofile', function () {
    return view('setupprofile');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/addproduct', function () {
    return view('addproduct');
});

Route::get('/adminorderlist', function () {
    return view('adminorderlist');
});

Route::get('/manageuser', function () {
    return view('manageuser');
});

Route::get('/orderscanner', function () {
    return view('orderscanner');
});

Route::get('/productlist', function () {
    return view('productlist');
});

Route::get('/transactionhistory', function () {
    return view('transactionhistory');
});

Route::get('/superadmin', function () {
    return view('superadmin');
});

Route::get('/superaddproduct', function () {
    return view('superaddproduct');
});

Route::get('/transactionsuper', function () {
    return view('transactionsuper');
});

Route::get('/superproductlist', function () {
    return view('superproductlist');
});

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

Route::get('/emptyorder', function () {
    return view('emptyorder');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/gcash', function () {
    return view('gcash');
});


Route::get('history', function () {
    return view('history');
});

Route::get('emptyhistory', function () {
    return view('emptyhistory');
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