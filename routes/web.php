<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('main');
});

// Auth (misafir)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Proje (sadece giriş yapmış kullanıcılar için)
Route::middleware('auth')->group(function () {
    // Proje oluşturma ve görüntüleme
    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
    Route::post('/project', [ProjectController::class, 'store'])->name('project.store');

    // Belirli bir projeye ait görevler (task)
    Route::get('/task/{project}', [TaskController::class, 'index'])->name('task.index');
    Route::post('/task/{project}', [TaskController::class, 'store'])->name('task.store');
});
