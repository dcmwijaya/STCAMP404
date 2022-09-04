<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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

// Route Menu
Route::get('/', [GeneralController::class, 'home']);
Route::get('/info-kegiatan', [GeneralController::class, 'infokegiatan']);
Route::get('/registrasi', [GeneralController::class, 'regist']);
Route::get('/dashboard', [GeneralController::class, 'dashboardaccount']);
Auth::routes();

// Route Admin Accessbility
Route::get('/data-pelatihan', [AdminController::class, 'index'])->name('data-pelatihan');
Route::post('/data-pelatihan/add', [AdminController::class, 'create'])->name('create');
Route::get('/data-pelatihan/update/{id}', [AdminController::class, 'update'])->name('update');
Route::get('/data-pelatihan/delete/{id}', [AdminController::class, 'delete'])->name('delete');

// Route Siswa Accessbility
Route::get('/data-siswa', [SiswaController::class, 'index'])->name('data-siswa');
Route::post('/data-siswa/add', [SiswaController::class, 'create'])->name('create');