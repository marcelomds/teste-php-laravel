<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    /**
     * Rota Home
     */
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    /**
     * CRUD de Categorias
     */
    Route::resource('categories', CategoryController::class)->except('show');


    /**
     * CRUD de Categorias
     */
    Route::resource('products', ProductController::class)->except('show');
});
