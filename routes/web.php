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
// Route::get('/reset', function (){
//     return view('Login.reset_password');
// })->name('reset');

Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process');
Route::post('/register', [RegisterController::class, 'processRegister'])->name('register.process');
Route::get('/logout', function() {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
// Route::post('/reset', [RegisterController::class, 'processReset'])->name('reset.process');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard_siswa'); 
})->name('dashboard');

Route::get('/kelas', function () {
    return view('dashboard.kelas12rpl2'); 
})->name('kelas');



// Route::post('/login_aplikasi', 'Login-aplikasiController@postlogin')->name('login_aplikasi');
// Route::post('/register_aplikasi', 'Register_aplikasiController@postregister')->name('register_apikasi');
// // Route::post('/reset_password', 'Reset_passwordController@postregister')->name('reset_password');
