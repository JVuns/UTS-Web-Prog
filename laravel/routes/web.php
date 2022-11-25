<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Models\Category;
use App\Models\Publisher;
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

view()->composer('layouts.header', function ($view) {
    $categories = Category::all();
    $view->with('categories',$categories);
});


Route::get('/', [BookController::class, 'index']);

Route::get('/home', [BookController::class, 'index']);

Route::get('/detail/{id}', [BookController::class, 'detailBook']);

Route::get('/publisher', [PublisherController::class, 'index']);

Route::get('/publisherDetail/{id}', [PublisherController::class, 'publisherDetail']);

Route::get('/category/{category}', [BookController::class, 'findCategory']);

Route::get('/contact', function () {
return view('contactPage');
});

