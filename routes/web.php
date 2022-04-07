<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Hash;

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
    return view('index');
})->middleware('auth');

Route::get('/home', function () {
    return view('index');
})->middleware('auth');

Route::get('/surat-masuk/{suratmasuk:id}/pdf', [PDFController::class, 'print_masuk'])->middleware('auth');
Route::get('/surat-keluar/{suratkeluar:id}/pdf', [PDFController::class, 'print_keluar'])->middleware('auth');
Route::resource('/surat-masuk', SuratMasukController::class)->middleware('auth');
Route::resource('/surat-keluar', SuratKeluarController::class)->middleware('auth');

// login dan register
Route::get("/login", [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post("/login", [LoginController::class, 'authenticate']);
Route::post("/logout", [LoginController::class, 'logout']);

Route::get("/password/{password}", function($password){
    return Hash::make($password);
})->middleware('guest');