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
// Route::prefix('admin')->group(function () {
    // Route::get('/users', function () {
//     // Matches The "/admin/users" URL
// });
// });
// Route::prefix('category')->group(function() {
//     Route::get('users/{id}', [ProductsController::class, 'products']);
// });

// Halaman News - Menampilkan Daftar berita (route parameter)
Route::get('/news/{id?}', [NewsController::class, 'news']);

// Halaman Program - Menampilkan Daftar Program (route prefix)


// Halaman About Us - Menampilkan About Us (route biasa)
Route::get('/about-us', [AboutUsController::class, 'about']);

// Halaman Contact Us - Menampilkan Contact Us (route resource only)

