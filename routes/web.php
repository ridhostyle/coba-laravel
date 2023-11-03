<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginMhsController;
use App\Http\Controllers\LoginDosenController;
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
Route::get('/auth/login', function() {
    return view('auth.login');

});

Route::get('/login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class,'login']);

Route::get('/auth/LoginMahasiswa', function() {
    return view('auth.LoginMahasiswa');

});

Route::get('/LoginMahasiswa', [LoginMhsController::class,'showLoginForm'])->name('LoginMahasiswa');
Route::post('/LoginMahasiswa', [LoginMhsController::class,'LoginMahasiswa']);


Route::get('/dashboard', function () {
    if(session()->get('account') == null) return redirect()->back();
    return view('dashboard');
});

Route::get('/CobaLoginDosen', [LoginDosenController::class,'showLoginForm'])->name('CobaLoginDosen');
Route::post('/CobaLoginDosen', [LoginDosenController::class,'CobaLoginDosen']);

Route::get('/auth/CobaLoginDosen', function() {
    return view('auth.CobaLoginDosen');

});