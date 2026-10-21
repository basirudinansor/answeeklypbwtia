<?php


use Illuminate\Support\Facades\Route;
use App\Models\Berita;

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


Route::get('/berita', function () {
    
    return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::ambildata(),
    ]);
});


/// routing untuk handling 1 berita
Route::get('berita/{slug}', function($slug) {

$data_berita = [
    [
        "judul" => "MBG Mas Burhan Gunawan",
        "slug" => "mbg-mas-burhan-gunawan",
        "penulis" => "Burhan",
        "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatum qui tenetur inventore corrupti, assumenda vel! Accusantium numquam adipisci explicabo repellat consequuntur! Nulla ab, aspernatur alias doloremque non ea inventore nam explicabo animi quos rerum? Voluptatem, impedit error et minus ad provident molestias nostrum quam natus repellat perspiciatis nemo sit praesentium dicta soluta officia porro facere sunt tenetur reiciendis eveniet ipsum quo consequuntur! Culpa totam veritatis eligendi consectetur commodi quo corporis tenetur et excepturi dolores explicabo atque a, quam sed laboriosam similique mollitia provident dignissimos necessitatibus. ",
    ],
    [
        "judul" => "Indonesia Juara ASEAN",
        "slug" => "indonesia-juara-asean",
        "penulis" => "Amin",
        "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatum qui tenetur inventore corrupti, assumenda vel! Accusantium numquam adipisci explicabo repellat consequuntur! Nulla ab, aspernatur alias doloremque non ea inventore nam explicabo animi quos rerum? Voluptatem, impedit error et minus ad provident molestias nostrum quam natus repellat perspiciatis nemo sit",
    ]
];

$singlenews = [];

foreach($data_berita as $berita)
{
    if($berita["slug"] == $slug)
    {
        $singlenews = $berita;
    }
}

    return view('beritatunggal', [
        "title" => "judul berita tunggal",
        "singlenews" => $singlenews,
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});