<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UploadgambarController;
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
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('HalamanDepan.beranda');
});

Route::get('/data-pegawai',[PegawaiController::class, 'index'])->name('data-pegawai');
Route::get('/create-pegawai',[PegawaiController::class, 'create'])->name('create-pegawai');
Route::post('/simpan-pegawai',[PegawaiController::class, 'store'])->name('simpan-pegawai');
Route::get('/edit-pegawai/{item}',[PegawaiController::class, 'edit'])->name('edit-pegawai');
Route::post('/update-pegawai/{item}',[PegawaiController::class, 'update'])->name('update-pegawai');
Route::get('/delete-pegawai/{item}',[PegawaiController::class, 'destroy'])->name('delete-pegawai');
Route::get('/data-gambar',[UploadgambarController::class, 'index'])->name('data-gambar');
Route::get('/create-gambar',[UploadgambarController::class, 'create'])->name('create-gambar');
Route::post('/simpan-gambar',[UploadgambarController::class, 'store'])->name('simpan-gambar');
Route::get('/edit-gambar/{item}',[UploadgambarController::class, 'edit'])->name('edit-gambar');
Route::post('/update-gambar/{item}',[UploadgambarController::class, 'update'])->name('update-gambar');
Route::get('/delete-gambar/{item}',[UploadgambarController::class, 'destroy'])->name('delete-gambar');