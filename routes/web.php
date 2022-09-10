<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
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

//login

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.process');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('cek', [AuthController::class, 'cek'])->name('ceklogin');

Route::get('owner', [AuthController::class, 'cek'])->name('owner')->middleware('isOwner');
Route::get('operasional', [AuthController::class, 'cek'])->name('operasional')->middleware('isOperasional');
Route::get('penjualan', [AuthController::class, 'cek'])->name('penjualan')->middleware('isPenjualan');


Route::get('/', [LoginController::class, 'index'])->name('welcome');
