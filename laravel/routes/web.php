<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LihatNilaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagenotController;

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
    return view('welcome');
});
Route::get('/salam', function () {
    return "selamat belajar laravel";
});

//tambah routing
Route::get('/staff/{nama}/{divisi}', function ($nama, $divisi) {
    return 'Nama Pegawai : ' . $nama. '<br> Dapartemen :' . $divisi;
});

//routing dengan memmanggil nama file view dari view
Route::get('/kondisi', function () {
    return view('kondisi');
});
Route::get('/nilai', function () {
    return view('coba.nilai');
});

//routing dengan view dan array data
Route::get('/daftarnilai', function () {
    return view('coba.daftar');
});
Route::get('/datamahasiswa', [LihatNilaiController::class, 'dataMahasiswa']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/notfound', [PagenotController::class, 'index']);
Route::get('/home', [DashboardController::class, 'home']);