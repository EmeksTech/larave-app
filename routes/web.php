<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PostController;

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


Route::get('/', [FrontController::class, 'index']);

Route::get('about', [FrontController::class, 'about'] );
Route::get('contact', [FrontController::class, 'contact']);
Route::get('posts', [PostController::class, 'index']);
Route::resource('posts', PostController::class);
