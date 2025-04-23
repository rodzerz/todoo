<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// ToDo routes
Route::get('/todos', [ToDoController::class, 'index'])->name('todos.index');
Route::get('/todos/create', [ToDoController::class, 'create']);
Route::get('/todos/{todo}', [ToDoController::class, 'show']);
Route::post('/todos', [ToDoController::class, 'store']);
Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit'])->name('todos.edit'); // ✅ fixed casing
Route::put('/todos/{todo}', [ToDoController::class, 'update']);
Route::delete('/todos/{todo}', [ToDoController::class, 'destroy']);

// Diary routes
Route::get('/diaries', [DiaryController::class, 'index'])->middleware('auth');
Route::get('/diaries/create', [DiaryController::class, 'create'])->middleware('auth');
Route::get('/diaries/{diarie}', [DiaryController::class, 'show'])->middleware('auth');
Route::post('/diaries', [DiaryController::class, 'store'])->middleware('auth');
Route::get('/diaries/{diarie}/edit', [DiaryController::class, 'edit'])->name('diaries.edit');
Route::put('/diaries/{diarie}', [DiaryController::class, 'update'])->middleware('auth');
Route::delete('/diaries/{diarie}', [DiaryController::class, 'destroy'])->middleware('auth');

// Auth routes
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
