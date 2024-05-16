<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PenerbitController;


Route::redirect('/', '/login');

Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'register_action'])->name('register.action');

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'postLogin']);

Route::get('/login', [PagesController::class, 'loginPage'])->name('login');
Route::get('/siswa', [PagesController::class, 'dashboardSiswa'])->name('dashboardSiswa');

Route::get('/dashboard', [PagesController::class, 'dashboardSiswa'])->name('dashboard');

Route::post('/createpenerbit', [PenerbitController::class, 'create'])->name('actio
n.createpenerbit');
Route::get('/createpenerbit', [PagesController:: class, 'create_penerbit'])->name
('create_penerbit');