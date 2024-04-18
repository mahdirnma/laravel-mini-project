<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[PostController::class,"index"]);
Route::get('/admin/category',[CategoryController::class,"show"]);
Route::get('/admin/post',[PostController::class,"show"]);
Route::get('/admin/post/add',[PostController::class,"add"]);
Route::post('/admin/post/create',[PostController::class,"create"]);
Route::delete('/admin/post/{id}/delete',[PostController::class,"delete"]);
Route::post('/admin/post/{id}/update',[PostController::class,"update"]);
Route::put('/admin/post/{id}/edit',[PostController::class,"edit"]);
