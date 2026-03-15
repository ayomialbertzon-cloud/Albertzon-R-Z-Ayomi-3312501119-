<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerpustakaanController;

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

// kode tambahan dari gambar 1
Route::get('/welcome', function () {
    return view('welcome');
});

// Tambahan kode dari gambar 2
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

// Tambahan kode dari gambar 3 (Route Group & Prefix)
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});


Route::get('/dashboard', [PerpustakaanController::class, 'index']);