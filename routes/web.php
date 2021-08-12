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
Route::get('/dashboard', [App\Http\Controllers\CustomerController::class, 'dashboard'])->name('customer.dashboard');
Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index'); 
Route::get('/customers/sort', [App\Http\Controllers\CustomerController::class, 'getCustomerSort'])->name('customer.sort');

Route::post('/customers', [App\Http\Controllers\CustomerController::class, 'storeCustomers'])->name('customer.store');
