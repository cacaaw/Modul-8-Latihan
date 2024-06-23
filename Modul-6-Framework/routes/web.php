<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;

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
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('auth', [LoginController::class, 'authenticate'])->name('auth');
Route::post('/register-user', [LoginController::class, 'registerUser'])->name('register-user');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('profile', ProfileController::class)->name('profile');
Route::resource('employees', EmployeeController::class);
