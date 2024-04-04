<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\MobilController;

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
Route::get('/register', [RegisterController::class, 'index']  )->name('register');
Route::get('/login', [LoginController::class, 'index']  )->name('login');
Route::get('/logout', [LoginController::class, 'logout']  )->name('logout');

Route::get('/admin/dashboard', [DashboardController::class, 'index']  )->name('dashboard');
Route::get('/admin/users', [UsersController::class, 'index']  )->name('users');
Route::get('/admin/mobil', [MobilController::class, 'index']  )->name('mobil');
Route::get('/admin/mobil/merk', [MobilController::class, 'merk']  )->name('mobil.merk');
Route::get('/admin/mobil/model', [MobilController::class, 'model']  )->name('mobil.model');


