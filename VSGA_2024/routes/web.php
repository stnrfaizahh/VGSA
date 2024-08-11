<?php

use Illuminate\Support\Facades\Route;

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