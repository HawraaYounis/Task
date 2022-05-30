<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/getCategories', [App\Http\Controllers\CategoryController::class, 'getCategories'])->name('getCategories');
Route::get('/getProducts/{id}', [App\Http\Controllers\ProductController::class, 'getProducts'])->name('getProducts');
Route::middleware(['auth'])->group(function () {
    Route::get('/addCategory', [App\Http\Controllers\CategoryController::class, 'addCategory'])->name('addCategory');
    Route::post('/createCategory', [App\Http\Controllers\CategoryController::class, 'createCategory'])->name('createCategory');
    Route::get('/addProduct', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('addProduct');
    Route::post('/createProduct', [App\Http\Controllers\ProductController::class, 'createProduct'])->name('createProduct');
    Route::get('/deleteProduct/{id}', [App\Http\Controllers\ProductController::class, 'deleteProduct'])->name('deleteProduct');
    Route::get('/deleteCategory/{id}', [App\Http\Controllers\CategoryController::class, 'deleteCategory'])->name('deleteCategory');
    Route::get('/editProduct/{id}', [App\Http\Controllers\ProductController::class, 'editProduct'])->name('editProduct');
    Route::post('/updateProduct/{id}', [App\Http\Controllers\ProductController::class, 'updateProduct'])->name('updateProduct');
});


