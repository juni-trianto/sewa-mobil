<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;

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

Route::get('/admin/dashboard', [DashboardController::class, 'index']  )->name('dashboard');
Route::get('/admin/users', [UsersController::class, 'index']  )->name('users');


