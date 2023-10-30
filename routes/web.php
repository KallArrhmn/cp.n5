<?php

use App\Http\Controllers\Controller;
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



Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard-siswa', function () {
    return view('component.dashboard-siswa');
});

Route::post('/login', 'LoginController@postlogin')->name('login');
Route::post('/register', 'RegisterController@postregister')->name('register');
Route::post('/dashboard-siswa', 'Dashboard-siswaController@postregister')->name('dashboard-siswa');

