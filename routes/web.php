<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Basirudin Ansor",
        "nim" => "A12312345678",
        "prodi" => "Teknologi Informasi",
        "gambar" => "ans.jpeg",
    ]);
});


Route::get('/berita', [BeritaController::class, 'tampilberita']);
Route::get('berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);

Route::get('/contact', function () {
    return view('contact');
});