<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register'=>false]);
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/{id}/category', [FrontendController::class, 'viewCategoryById'])->name('showCategory');
Route::get('/{id}/tag', [FrontendController::class, 'viewTagById'])->name('showTag');
Route::get('/{id}/article', [FrontendController::class, 'viewArticleById'])->name('showArticle');
Route::get('/deshboard', [HomeController::class, 'index'])->name('deshboard');
Route::resource('/users', UserController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/tags', TagController::class);
Route::resource('/articles', ArticleController::class);



