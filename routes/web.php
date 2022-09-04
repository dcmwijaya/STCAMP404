<?php

use App\Http\Controllers\MenuController;
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
Route::get('/', [MenuController::class, 'home']);
Route::get('/data-siswa', [MenuController::class, 'datasiswa']);
Route::get('/info-kegiatan', [MenuController::class, 'infokegiatan']);
Route::get('/registrasi', [MenuController::class, 'regist']);
Route::get('/dashboard', [MenuController::class, 'dashboardaccount']);
Auth::routes();

// Route Siswa Accessbility
Route::get('/data-siswa', [SiswaController::class, 'index'])->name('data-siswa');
Route::post('/data-siswa/siswa/add', [SiswaController::class, 'create'])->name('data-siswa');
Route::get('/data-siswa/siswa/update', [SiswaController::class, 'update'])->name('data-siswa');
Route::get('/data-siswa/siswa/delete', [SiswaController::class, 'delete'])->name('data-siswa');

// Route Admin Accessbility
Route::get('/data-siswa', [AdminController::class, 'index'])->name('data-siswa');
Route::post('/data-siswa/admin/add', [AdminController::class, 'create'])->name('data-siswa');
Route::get('/data-siswa/admin/update', [AdminController::class, 'update'])->name('data-siswa');
Route::get('/data-siswa/admin/delete', [AdminController::class, 'delete'])->name('data-siswa');