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
    return view('home');
});
Route::get('/about', function () {
    return view('about', [
        "name" => "Mohammad Tanio",
        "email" => "tanmyid1337@gmail.com",
        "image" => "img/gambar.jpg"
    ]);
});
Route::get('/blog', function () {
    return view('post');
});
