<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
    return redirect('show-data-mahasiswa');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('input-mahasiswa', [MahasiswaController::class,'index'])->name('index')->middleware('auth');
Route::post('kirim-mahasiswa', [MahasiswaController::class, 'store'])->name('store')->middleware('auth');
Route::get('delete-mahasiswa/{nim}',[MahasiswaController::class,'delete'])->name('delete')->middleware('auth');
Route::get('edit-mahasiswa/{nim}',[MahasiswaController::class,'edit'])->name('edit')->middleware('auth');
Route::get('show-data-mahasiswa',[MahasiswaController::class,'show'])->name('show')->middleware('auth');
Route::post('update-mahasiswa/{nim}',[MahasiswaController::class,'update'])->name('update')->middleware('auth');
