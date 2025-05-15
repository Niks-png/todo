<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/why', function () {
    return view('why');
});

Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/diaries', [DiaryController::class, 'index']);
Route::get('/todos/store', [ToDoController::class, 'store'])->middleware("auth");
Route::get('/todos/create', [ToDoController::class, 'create'])->middleware("auth");
Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit'])->middleware("auth");
Route::get('/todos/{todo}', [ToDoController::class, 'show']);
Route::get('/diaries/store', [DiaryController::class, 'store']);
Route::get('/diaries/create', [DiaryController::class, 'create'])->middleware("auth");
Route::get('/diaries/{diary}', [DiaryController::class, 'show']);
Route::post('/todos', [ToDoController::class, 'store']);
Route::post('/diaries', [DiaryController::class, 'store']);

Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
Route::get('/login', [SessionController::class, 'create'])->name("login")->middleware("guest");
Route::post('/login', [SessionController::class, 'store'])->middleware("guest");
Route::get('/register', [RegisterController::class, "create"])->middleware("guest");
Route::get('/', function () {
    return view('random');
})->middleware("auth");