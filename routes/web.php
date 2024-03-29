<?php

use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UsersController::class, 'admins']);
Route::get('/users', [UsersController::class, 'users']);
Route::get('/statistics', [StatisticsController::class, 'index'])->name('statistics.index');

Route::resource('tasks', TaskController::class)->except([
    'show'
]);
