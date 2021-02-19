<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index']);
Route::get('movie/{id}', [IndexController::class, 'showMovie']);
Route::post('recordComment', [CommentController::class, 'recordComment']);
Route::get('getComment/{id}', [CommentController::class, 'getComment']);
Route::get('getCommentById/{id}', [CommentController::class, 'getCommentById']);
Route::post('updateComment',[CommentController::class, 'updateComment']);

/*Route::get('/', function () {
    return view('welcome');
});
*/
