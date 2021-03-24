<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home/Category', [CategoryController::class, 'index'])->name('category');
Route::get('home/Category/manage_Category', [CategoryController::class, 'manage_category'])->name('manage_category');
Route::post('home/Category/category_manage_process', [CategoryController::class, 'category_manage_process'])->name('category.insert');
Route::get('home/Category/delete/{id}', [CategoryController::class, 'delete']);
