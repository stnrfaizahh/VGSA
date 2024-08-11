<?php

use App\Http\Controllers\pengajarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControllerSatu;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Hello', function(){
    return 'Hello World';
});

Route::get('/world', function(){
    return 'hello Dunia';
});

Route::get('/welcome', function(){
    return 'Selamat Datang';
});

Route::get('/about', function(){
    return 'NIM : 2231740013';
});

Route::get('/user/{Faizah}', function($name){
    return 'Nama saya ' .$name;
});

Route::get('/posts/{post}/{comment}', function ($post, $comment){
    return 'Pos ke-' . $post . " Komentar ke-: " . $comment;
});

Route::get('/user{Siti?}', function ($name=null){
    return 'Nama saya' . $name;
});

Route::get('/kodebarang{Boneka?}', function ($jk='k01', $mrk='bonavie'){
    return "Kode barang $jk dan nama barang $mrk";
});

Route::get('about', function(){
    return view('about');
})->name('about');

Route::get('tampil', function(){
    return view('tampil');
})->name('tampil');

Route::get('/pesandisini', function(){
    return '<h1> pesan disini </h1>';
});
Route::redirect('/contact-us', '/pesandisini');

Route::prefix('/polinema')->group(function(){
    Route::get('/dosen', function(){
        echo "<h1> daftar dosen </h1>";
    });
    Route::get('/tendik', function(){
        echo "<h1> daftar tendik </h1>";
    });
    Route::get('/jurusan', function(){
        echo "<h1> daftar jurusan </h1>";
    });
});

Route::fallback(function(){
    return "maaf, alamat ini tidak ditemukan";
});
    
Route::get('/daftar-dosen',[pengajarController::class,'daftarPengajar']);
Route::get('/tabel-pengajar',[pengajarController::class,'tabelPengajar']);
Route::get('/blog-pengajar',[pengajarController::class,'blogPengajar']);

Route::get('pasar-buah',[PageControllerSatu::class,'satu']);