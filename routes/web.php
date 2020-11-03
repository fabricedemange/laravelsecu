<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\commentController;

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




//Route::resource('articles', ArticleController::class);
//Route::resource('comments', CommentController::class);
Route::middleware('auth')->group(function () {
    Route::get('articles/index', [articleController::class, 'index'])->name('articles/index');
    Route::get('articles/edit/{article}', [articleController::class, 'edit'])->name('articles/edit');
    Route::get('articles/create', [articleController::class, 'create'])->name('articles/create');


    Route::delete('articles/destroy/{article}', [articleController::class, 'destroy'])->name('articles/destroy');
    Route::post('articles/store', [articleController::class, 'store'])->name('articles/store');
    Route::put('articles/update/{id}', [articleController::class, 'update'])->name('articles/update');


    Route::get('comments/index', [commentController::class, 'index'])->name('comments/index');
    Route::get('comments/show/{comment}', [commentController::class, 'show'])->name('comments/show');

    Route::get('comments/create/{article}', [commentController::class, 'create'])->name('comments/create');
    Route::post('comments/store', [commentController::class, 'store'])->name('comments/store');
    Route::get('comments/edit/{comment}', [commentController::class, 'edit'])->name('comments/edit');

    Route::delete('comments/destroy/{comment}', [commentController::class, 'destroy'])->name('comments/destroy');
    Route::put('comments/update/{id}', [commentController::class, 'update'])->name('comments/update');

});

Route::get('articles/show/{article}', [articleController::class, 'show'])->name('articles/show');
Route::get('articles/index_light', [articleController::class, 'index_light'])->name('articles/index_light');




//Route::get('comment_index', [commentController::class, 'index'])->name('comments/index')->middleware('auth');


//Route::resource('articles', ArticleController::class)->middleware('auth');

//Route::get('articles_index', [Articlecontroller::class, 'index']);