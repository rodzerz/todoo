<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', [ToDoController::class, 'index'])->name('todos.index');
Route::get('/todos/create', [ToDoController::class, 'create']);
Route::get('/todos/{todo}', [ToDoController::class, 'show']);
Route::post('/todos', [ToDoController::class, 'store']);
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');
Route::put('/todos/{todo}', [ToDoController::class, 'update']);
Route::delete('/todos/{todo}', [ToDoController::class, 'destroy']);







Route::get('/diaries', [DiaryController::class, 'index']);
Route::get('/diaries/create', [DiaryController::class, 'create']);
Route::get('/diaries/{diarie}', [DiaryController::class, 'show']);
Route::post('/diaries', [DiaryController::class, 'store']);
Route::get('/diaries/{diarie}/edit', [DiaryController::class, 'edit'])->name('diaries.edit');
Route::put('/diaries/{diarie}', [DiaryController::class, 'update']);
Route::put('/diaries/{diarie}', [DiaryController::class, 'update']);
Route::delete('/diaries/{diarie}', [DiaryController::class, 'destroy']);



Route::get('/login', [SessionController::class, "create"])->name("login");
Route::post('/', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
Route::get('/register', [RegisterController::class, "create"])->middleware("guest");
Route::post('/register', [RegisterController::class, 'store']);

