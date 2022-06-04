<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\FDController;
use App\Http\Controllers\IteneraryController;

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

Route::middleware('admin-auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});



Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'adminLogin'])->name('login');
Route::get('logout', [LoginController::class, 'adminLogout'])->name('logout');
Route::get('all-partners', [PartnerController::class, 'index'])->name('all-partners');

Route::get('currency', [CurrencyController::class, 'index'])->name('currency');
Route::post('currency', [CurrencyController::class, 'store'])->name('currency');
Route::post('currency-tracker', [CurrencyController::class, 'currencyTracker'])->name('currency-tracker');
Route::post('currency-editor/{id}', [CurrencyController::class, 'update'])->name('currency-editor');
Route::get('currency-value-editor/{id}', [CurrencyController::class, 'edit'])->name('currency-value-editor');
Route::post('currency-value-editor/{id}', [CurrencyController::class, 'updateCurrencyValue'])->name('currency-value-editor');

Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('deals', [DealController::class, 'index'])->name('deals');
Route::get('fds', [FDController::class, 'index'])->name('fds');
Route::get('iteneraries', [IteneraryController::class, 'index'])->name('iteneraries');
Route::get('itenerary-details/{id}', [IteneraryController::class, 'iteneraryDetails'])->name('itenerary-details');
Route::post('itenerary-update/{id}', [IteneraryController::class, 'update'])->name('itenerary-update');
