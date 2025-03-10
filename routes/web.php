<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/todos/{todo}', [ToDoController::class, 'show']);