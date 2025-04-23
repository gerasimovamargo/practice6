<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestbookController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/guestbook', [GuestbookController::class, 'index'])->name('guestbook');
Route::post('/guestbook', [GuestbookController::class, 'store'])->name('guestbook.store');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
