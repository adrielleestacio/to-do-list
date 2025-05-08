<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', [TodoListController::class, 'index']);
Route::post('/saveItem', [TodoListController::class, 'saveItem'])->name('saveItem');
Route::get('/viewItem/{id}', [TodoListController::class, 'viewItem'])->name('viewItem');
Route::get('/editItem/{id}', [TodoListController::class, 'editItem'])->name('editItem');
Route::post('/updateItem/{id}', [TodoListController::class, 'updateItem'])->name('updateItem');
Route::get('/deleteItem/{id}', [TodoListController::class, 'deleteItem'])->name('deleteItem');