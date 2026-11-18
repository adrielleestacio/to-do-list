<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', [TodoListController::class, 'index']);
Route::post('/saveItem', [TodoListController::class, 'saveItem'])->name('saveItem');
Route::get('/viewItem/{id}', [TodoListController::class, 'viewItem'])->name('viewItem');
Route::get('/editItem/{id}', [TodoListController::class, 'editItem'])->name('editItem');
Route::post('/updateItem/{id}', [TodoListController::class, 'updateItem'])->name('updateItem');

// Deleting changes data, so it is POST-only: a GET route can be followed by a
// crawler or a link prefetcher and wipe a row nobody asked to delete.
Route::post('/deleteItem/{id}', [TodoListController::class, 'deleteItem'])->name('deleteItem');
