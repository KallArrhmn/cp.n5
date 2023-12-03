<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Auth;

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
    return view('Login.login_aplikasi');
})->name('login');

Route::get('/register', function () {
    return view('Login.register_aplikasi');
})->name('register');

Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process');
Route::post('/register', [RegisterController::class, 'processRegister'])->name('register.process');
Route::get('/logout', function() {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

Route::get('/reset_password', function () {
    return view('Login.reset_password');
});

Route::get('/dashboard-siswa', function () {
    return view('dashboard-siswa.dashboard-siswa');
})->name('dashboard-siswa');

Route::get('/dashboard-guru', function () {
    return view('dashboard-guru.dashboard-guru');
})->name('dashboard-guru');

Route::get('/dashboard-kepsek', function() {
    return 'Dashboard Kepsek';
})->name('dashboard-kepsek');


Route::get('/kelas10', [Controller::class, 'kelas10'])->name('kelas10');

// Route::post('/login_aplikasi', 'Login-aplikasiController@postlogin')->name('login_aplikasi');
// Route::post('/register_aplikasi', 'Register_aplikasiController@postregister')->name('register_apikasi');
// Route::post('/reset_password', 'Reset_passwordController@postregister')->name('reset_password');
// Route::post('/dashboard-siswa', 'Dashboard-siswaController@postregister')->name('dashboard-siswa');
// Route::post('/dashboard-guru', 'Dashboard-guruController@postregister')->name('dashboard-guru');
