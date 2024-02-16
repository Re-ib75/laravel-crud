<?php

use Illuminate\Support\Facades\Route;
App\Http\Controllers\CategorytController::store();
use App\Http\Controllers\CategorytController;
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


Route::get('categories',[CategorytController::class,'index']);
Route::get('categories/create',[CategorytController::class,'create']);
Route::post('categories/create',[CategorytController::class,'store'])->name('category.store');;
