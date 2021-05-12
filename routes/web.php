<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\TransactionController;


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

Route::resources([
    '/residents' => ResidentController::class,
    '/home' => HomeController::class,
    '/login' => LoginController::class,
    '/transactions' => TransactionController::class,
    '/documents' => DocumentController::class


]);

Auth::routes(); 

/*Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', function () {
    return redirect('/posts');
});

Route::get('/delete-blank-post', [App\Http\Controllers\PostController::class, 'deleteBlank']);
Route::get('/posts-archive', [App\Http\Controllers\PostController::class, 'archive']);
Route::get('/posts/{id}/restore', [App\Http\Controllers\PostController::class, 'restore']);
Route::resource('/posts', App\Http\Controllers\PostController::class);
Route::resource('/comments',  App\Http\Controllers\CommentController::class);
*/