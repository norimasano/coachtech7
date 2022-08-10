<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;//追記

Route::get('/', [AuthorController::class, 'index']);
Route::get('/find', [AuthorController::class, 'find']);
Route::post('/find', [AuthorController::class, 'search']);
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);
// 追記：ここから
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);
// 追記：ここまで
Route::get('/author/{author}', [AuthorController::class, 
'bind']);
// 追記：ここから
Route::get('/middleware', [AuthorController::class, 'get']);
Route::post('/middleware', [AuthorController::class, 'post']);
// 追記：ここまで

Route::prefix('book')->group(function () {//以下を追記
Route::get('/', [BookController::class, 'index']);
Route::get('/add', [BookController::class, 'add']);
Route::post('/add', [BookController::class, 'create']);
});
// 以下追記
Route::get('/relation', [AuthorController::class, 'relate']);
