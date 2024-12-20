<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



    Route::get('/tasks', [App\Http\Controllers\TasksController::class, 'tasks'])->name('tasks');

    Route::post('/tasks', [App\Http\Controllers\TasksController::class, 'create'])->name('create');

    Route::put('/tasks/{id}', [App\Http\Controllers\TasksController::class, 'update'])->name('update');

    Route::delete('/tasks/{id}', [App\Http\Controllers\TasksController::class, 'delete'])->name('delete');



