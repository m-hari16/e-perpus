<?php

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

Route::get('/', 'Web\BukuController@listForMember')->name('home');

Route::get('login-petugas', 'Web\AuthController@index')->name('login_petugas');
Route::post('login', 'Web\AuthController@login');

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::resource('/perpustakaan', 'Web\PerpustakaanController');
    Route::resource('/kategori-buku', 'Web\KategoriBukuController');
    Route::resource('/buku', 'Web\BukuController');
    Route::resource('/petugas', 'Web\PetugasController');
    Route::resource('/anggota', 'Web\AnggotaController');
    Route::resource('/kunjungan', 'Web\KunjunganController');
    Route::resource('/peminjaman', 'Web\PeminjamanController');
    Route::resource('/pengembalian', 'Web\PengembalianController');
    Route::post('/logout', 'Web\AuthController@logout');
});