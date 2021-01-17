<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\fullStatementController;
use App\Http\Controllers\TransactionsController;

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

Route::get('/home', [TransactionsController::class, 'index'])->middleware('auth')->name('home');
Route::get('/income', [IncomeController::class, 'index']);
Route::get('/expenses', [expenseController::class, 'index']);
Route::get('/fullStatement', [fullStatementController::class, 'index']);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
