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
Route::get('/month/add-asset', [App\Http\Controllers\HomeController::class, 'addAsset'])->name('month.asset.create');
Route::post('/month/add-asset/store', [App\Http\Controllers\HomeController::class, 'addAssetStore'])->name('month.asset.store');
Route::get('/month/add-expense', [App\Http\Controllers\HomeController::class, 'addExpense'])->name('month.expense.create');
Route::post('/month/add-expense/store', [App\Http\Controllers\HomeController::class, 'addExpenseStore'])->name('month.expense.store');
Route::get('/month/add-withdraw', [App\Http\Controllers\HomeController::class, 'addWithdraw'])->name('month.withdraw.create');
Route::post('/month/add-withdraw/store', [App\Http\Controllers\HomeController::class, 'addWithdrawStore'])->name('month.withdraw.store');
Route::get('/month/add-landing', [App\Http\Controllers\HomeController::class, 'addLanding'])->name('month.landing.create');
Route::post('/month/add-landing/store', [App\Http\Controllers\HomeController::class, 'addLandingStore'])->name('month.landing.store');
