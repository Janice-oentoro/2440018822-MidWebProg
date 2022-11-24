<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/contact', [MainController::class, 'contact']); 
//Route::get('/create', [MainController::class, 'create']); 
//Route::post('/stores', [MainController::class, 'store']); 
Route::get('/', [MainController::class, 'homeindex']);
Route::get('/publisher', [MainController::class, 'pubindex']); 
Route::get('/detail/{id}', [MainController::class, 'detail'])->name('book.detail');
Route::get('/category/{id}', [MainController::class, 'list'])->name('category.list');
