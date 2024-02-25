<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TodoListController::class, 'index'])->name('index');
Route::post('/save-task', [ToDoListController::class, 'saveTask'])->name('saveTask');
Route::get('/delete-task/{id}', [ToDoListController::class, 'deleteTask'])->name('deleteTask');
Route::get('/update-task/{id}', [ToDoListController::class, 'updateTask'])->name('updateTask');
Route::post('/save-updated-task', [ToDoListController::class, 'saveUpdatedTask'])->name('saveUpdatedTask');