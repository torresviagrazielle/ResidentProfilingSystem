<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;


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

/*Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    '/residents' => ResidentController::class,
    '/home' => HomeController::class,
    '/login' => LoginController::class,
    '/transactions' => TransactionController::class,
    '/documents' => DocumentController::class


]);

Auth::routes(); */

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Auth::routes(['verify' => true ]);

Route::get('/home', function () {
    return redirect('/dashboard');
})->middleware('verified');;

Route::get('/delete-blank-transaction', [App\Http\Controllers\TransactionController::class, 'deleteBlank']);
Route::get('/transactions-archive', [App\Http\Controllers\TransactionController::class, 'archive']);
Route::get('/transactions/{id}/restore', [App\Http\Controllers\TransactionController::class, 'restore']);

Route::get('/delete-blank-resident', [App\Http\Controllers\ResidentController::class, 'deleteBlank']);
Route::get('/residents-archive', [App\Http\Controllers\ResidentController::class, 'archive']);
Route::get('/residents/{id}/restore', [App\Http\Controllers\ResidentController::class, 'restore']);


Route::resource('/transactions', App\Http\Controllers\TransactionController::class);
Route::resource('/residents',  App\Http\Controllers\ResidentController::class);
Route::resource('/dashboard',  App\Http\Controllers\DashboardController::class);
Route::resource('/documents', DocumentController::class);


Route::get('/search', [App\Http\Controllers\ResidentController::class, 'search'])->name('search');
Route::get('/searchtransac', [App\Http\Controllers\TransactionController::class, 'searchtransac'])->name('searchtransac');

//Route::get('/print', 'ResidentController@exportCsv');
Route::get('/print', [App\Http\Controllers\ResidentController::class, 'exportCsv'])->name('exportCsv');
//Route::get('/print', [App\Http\Controllers\TransactionController::class, 'exportCsv'])->name('exportCsv');


//Route for mailing
Route::get('/email', function(){
    Mail::to('201810909@gordoncollege.edu.ph')->send(new WelcomeMail());
    return new WelcomeMail();
});

//Route::get('/transaction/print', [App\Http\Controllers\TransactionController::class, 'printPDF'])->name('printPDF');
Route::get('/transaction/print', [App\Http\Controllers\TransactionController::class, 'printTransaction'])->name('printTransaction');

