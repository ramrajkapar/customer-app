<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['prefix' => '/customers', 'middleware' => ['auth:api']], function(){

//     Route::post('/store', [App\Http\Controllers\CustomerController::class, 'storeCustomers'])->name('customer.store.api');
//     // Route::post('/store',[ItemController::class,'store']);
//     // Route::put('/{id}',[ItemController::class,'update']);
//     // Route::delete('/{id}',[ItemController::class,'destory']);
// });

Route::group(['prefix' => '/customers'], function(){

    Route::post('/store', [App\Http\Controllers\CustomerController::class, 'storeCustomers'])->name('customer.store.api');
    Route::get('/list', [App\Http\Controllers\CustomerController::class, 'getCustomerList'])->name('customer.list.api'); 
    Route::post('/customer', [App\Http\Controllers\CustomerController::class, 'getCustomerById'])->name('customer.get.api'); 
    Route::post('/remove', [App\Http\Controllers\CustomerController::class, 'deleteCustomerById'])->name('customer.remove.api'); 
    Route::post('/sort', [App\Http\Controllers\CustomerController::class, 'sortCustomerByLatLong'])->name('customer.sort.api');
    // Route::post('/store',[ItemController::class,'store']);
    // Route::put('/{id}',[ItemController::class,'update']);
    // Route::delete('/{id}',[ItemController::class,'destory']);
});