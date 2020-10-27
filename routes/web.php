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

Route::get('articles/index', [articleController::class, 'index'])->name('articles/index') -> middleware('auth');
Route::get('articles/create', [articleController::class,'create'])->name('articles/create');
Route::get('articles/edit/{article}', [articleController::class, 'edit'])->name('articles/edit')->middleware('auth');

Route::get('articles/show/{article}', [ articleController::class, 'show'])->name('articles/show');

Route::delete('articles/destroy/{article}', [articleController::class, 'destroy'])->name('articles/destroy')->middleware('auth');
Route::post('articles/store', [articleController::class, 'store'])->name('articles/store')->middleware('auth');
Route::put('articles/update/{id}', [articleController::class, 'update'])->name('articles/update')->middleware('auth');

Route::get('articles/index_light', [articleController::class, 'index_light'])->name('articles/index_light');

Route::get('comments/index', [commentController::class, 'index'])->name('comments/index')->middleware('auth');
Route::get('comments/show/{comment}', [commentController::class, 'show'])->name('comments/show')->middleware('auth');

Route::get('comments/create/{article}', [commentController::class, 'create'])->name('comments/create')->middleware('auth');
Route::post('comments/store', [commentController::class, 'store'])->name('comments/store')->middleware('auth');
Route::get('comments/edit/{comment}', [commentController::class, 'edit'])->name('comments/edit')->middleware('auth');
Route::put('comments/valider/{comment}', [commentController::class, 'valider'])->name('comments/valider')->middleware('auth');

Route::delete('comments/destroy/{comment}', [commentController::class, 'destroy'])->name('comments/destroy')->middleware('auth');
Route::put('comments/update/{id}', [commentController::class, 'update'])->name('comments/update')->middleware('auth');


Route::get('comment_index', [commentController::class, 'index'])->name('comments/index')->middleware('auth');


//Route::resource('articles', ArticleController::class)->middleware('auth');

//Route::get('articles_index', [Articlecontroller::class, 'index']);