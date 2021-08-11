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

Route::group(['prefix' => '/customers', 'middleware' => ['auth:api']], function(){

    Route::post('/store', [App\Http\Controllers\CustomerController::class, 'storeCustomers'])->name('customer.store.api');
    // Route::post('/store',[ItemController::class,'store']);
    // Route::put('/{id}',[ItemController::class,'update']);
    // Route::delete('/{id}',[ItemController::class,'destory']);
});
