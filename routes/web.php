<?php

use App\Http\Controllers\Todo;

Route::get('/', [Todo::class, 'index']);
Route::post('/todos', [Todo::class, 'store']);
Route::put('/todos/{id}', [Todo::class, 'update']);
Route::delete('/todos/{id}', [Todo::class, 'destroy']);