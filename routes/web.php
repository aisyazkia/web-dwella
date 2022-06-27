<?php

use Faker\Provider\Medical;
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
    return view('Medical');
});

Route::get('/home', function () {
    return view('Medical');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/produk', function () {
    return view('user.produk');
});

Route::get('/jadwal', function () {
    return view('user.jadwal');
});

Route::get('/daftar', function () {
    return view('user.buatjanji');
});

Route::get('/profile', function () {
    return view('user.profile');
});