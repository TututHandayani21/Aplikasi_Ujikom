<?php

// Mengimpor controller yang dibutuhkan untuk menangani request
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskListController;
use Illuminate\Support\Facades\Route;

// --------------------------------------------
// Definisi Route untuk Aplikasi
// --------------------------------------------

// Route untuk halaman utama (home)
Route::get('/', [TaskController::class, 'index'])->name('home');

// Route untuk halaman profile
Route::get('/profile', [TaskController::class, 'profile'])->name('profile');

// --------------------------------------------
// Resource Routes
// --------------------------------------------

// Menyediakan semua route RESTful (index, create, store, show, edit, update, destroy)
// untuk TaskListController (mengelola daftar tugas)
Route::resource('lists', TaskListController::class);

// Menyediakan semua route RESTful untuk TaskController (mengelola tugas)
Route::resource('tasks', TaskController::class);

// --------------------------------------------
// Custom Routes untuk TaskController
// --------------------------------------------

// Route untuk menandai tugas sebagai selesai
Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');

// Route untuk memindahkan tugas ke daftar tugas lain
Route::patch('/tasks/{task}/change-list', [TaskController::class, 'changeList'])->name('tasks.changeList');
