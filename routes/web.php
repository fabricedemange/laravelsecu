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
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//use App\Http\Controllers\articleController;

//Route::resource('article', articleController::class);

Route::get('/index', function () {
   return view('index');
});

use App\Http\Controllers\ArticleController;
Route::get('article_create', [articleController::class, 'create'])->name('article.create')->middleware('auth');
Route::get('article_index', [articleController::class, 'index'])->name('article.index') -> middleware('auth');
Route::get('article_index_light', [articleController::class, 'index_light'])->name('article.index_light');
Route::get('article_show', [articleController::class, 'show'])->name('article.show');
Route::post('article_update', [articleController::class, 'update'])->name('article.update');


//Route::resource('articles', ArticleController::class)->middleware('auth');
Route::resource('articles', ArticleController::class);

//Route::get('articles_index', [Articlecontroller::class, 'index']);