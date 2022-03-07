<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Default route bawaan create project laravel
Route::get('/', function () {
    return view('welcome');
});

// Jobsheet 2 Praktikum 3

// Halaman Home - Menampilkan Halaman Awal Website
Route::get('/', [HomeController::class, 'home']);

// Halaman Products - Menampilkan Daftar Product (route prefix)
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductsController::class, 'edu']);

    Route::get('/marbel-and-friends-kids-games', [ProductsController::class, 'friends']);

    Route::get('/riri-story-books', [ProductsController::class, 'riri']);

    Route::get('/kolak-kids-songs', [ProductsController::class, 'kolak']);
});

// Halaman News - Menampilkan Daftar berita (route parameter)
Route::get('/news/{id?}', [NewsController::class, 'news']);

// Halaman Program - Menampilkan Daftar Program (route prefix)
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);

    Route::get('/magang', [ProgramController::class, 'magang']);

    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan']);
});

// Halaman About Us - Menampilkan About Us (route biasa)
Route::get('/about-us', [AboutUsController::class, 'about']);

// Halaman Contact Us - Menampilkan Contact Us (route resource only)
// Route::resource('/contact-us', ContactUsController::class, 'contact');
