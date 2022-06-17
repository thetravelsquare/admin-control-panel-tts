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
use App\Http\Controllers\CityController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\RequestController;


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

    Route::get('all-partners', [PartnerController::class, 'index'])->name('all-partners');
    Route::get('all-accounts', [PartnerController::class, 'allAccounts'])->name('all-accounts');

    Route::get('currency', [CurrencyController::class, 'index'])->name('currency');
    Route::post('currency', [CurrencyController::class, 'store'])->name('currency');
    Route::post('currency-tracker', [CurrencyController::class, 'currencyTracker'])->name('currency-tracker');
    Route::post('currency-editor/{id}', [CurrencyController::class, 'update'])->name('currency-editor');
    Route::get('currency-value-editor/{id}', [CurrencyController::class, 'edit'])->name('currency-value-editor');
    Route::post('currency-value-editor/{id}', [CurrencyController::class, 'updateCurrencyValue'])->name('currency-value-editor');

    Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
    Route::get('blog-approve/{id}', [BlogController::class, 'approve'])->name('blog-approve');
    Route::get('blog-reject/{id}', [BlogController::class, 'reject'])->name('blog-reject');

    Route::get('deals', [DealController::class, 'index'])->name('deals');
    Route::get('fds', [FDController::class, 'index'])->name('fds');


    // ---------------------------------------------ITENERARY-----------------------------------------

    Route::get('add-new-itenerary', [IteneraryController::class, 'create'])->name('itenerary-add');
    Route::post('add-post-itenerary', [IteneraryController::class, 'store'])->name('add-post-itenerary');
    Route::get('itenerary-bulk-upload', [IteneraryController::class, 'fileImportExport'])->name('bulk-upload');
    Route::post('file-import', [IteneraryController::class, 'fileImport'])->name('file-import');
    Route::get('iteneraries', [IteneraryController::class, 'index'])->name('iteneraries');
    Route::get('itenerary-details/{id}', [IteneraryController::class, 'iteneraryDetails'])->name('itenerary-details');
    Route::post('itenerary-update/{id}', [IteneraryController::class, 'update'])->name('itenerary-update');

    Route::get('cities', [CityController::class, 'index'])->name('cities');
    Route::get('add-city', [CityController::class, 'create'])->name('add-city');
    Route::post('add-city', [CityController::class, 'store'])->name('add-city');
    Route::get('edit-city/{id}', [CityController::class, 'edit'])->name('edit-city');
    Route::post('update-city/{id}', [CityController::class, 'update'])->name('update-city');    
    
    // ---------------------------------------------ITENERARY-----------------------------------------
    Route::get('refund-requests', [RefundController::class, 'index'])->name('refund-requests');
    Route::get('refund-requests/initiate/{id}', [RefundController::class, 'initiate'])->name('refund.initiate');
    Route::get('refund-requests/approve/{id}', [RefundController::class, 'approve'])->name('refund.approve');
    Route::get('refund-requests/reject/{id}', [RefundController::class, 'reject'])->name('refund.reject');
    
    // ---------------------------------------------REQUESTS-----------------------------------------
    Route::get('ppc-requests', [RequestController::class, 'ppcRequests'])->name('ppc-requests');
    Route::get('general-requests', [RequestController::class, 'generalRequests'])->name('general-requests');
    Route::get('business-requests', [RequestController::class, 'businessRequests'])->name('business-requests');
    Route::get('payment-requests', [RequestController::class, 'paymentRequests'])->name('payment-requests');
    Route::get('group-fare-requests', [RequestController::class, 'groupFareRequests'])->name('group-fare-requests');
    Route::post('update-group-fare/{id}', [RequestController::class, 'updateFareGF'])->name('update-group-fare');
    Route::get('settlement-requests', [RequestController::class, 'settlementRequests'])->name('settlement-requests');
    Route::get('settlement-requests/process/{id}', [RequestController::class, 'processing'])->name('settlement.processing');
    Route::get('settlement-requests/settle/{id}', [RequestController::class, 'settled'])->name('settlement.settled');

});



Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'adminLogin'])->name('login');
Route::get('logout', [LoginController::class, 'adminLogout'])->name('logout');

