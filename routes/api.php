<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks_index');
Route::post('/tasks/create', [TaskController::class, 'create'])->name('tasks_create');
Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks_update');
Route::delete('/tasks/{id}', [TaskController::class, 'delte'])->name('tasks_delete');
