<?php

use App\Http\Controllers\Create_card_request;
use App\Http\Controllers\Superadmin;

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
Route::get('/', [Superadmin::class, 'login']);
Route::get('/admin', [Superadmin::class, 'admin']);
Route::get('/dashboard', [Superadmin::class, 'dashboard']);
Route::get('/list', [Superadmin::class, 'dashboard']);
Route::get('/approve', [Superadmin::class, 'approveList']);
Route::get('/rejected', [Superadmin::class, 'rejectedList']);
Route::get('/logout', [Superadmin::class, 'logout']);
Route::get('/fuelDataList', [Superadmin::class, 'fuel_data_list']);
Route::post('/login_access', [Superadmin::class, 'login']);
Route::post('/card_store', [Superadmin::class, 'store']);
Route::post('/upload-csv', [Superadmin::class, 'uploadCsv'])->name('upload-csv');


//by rahhul///
Route::get('/get_data/{id}', [Superadmin::class, 'get_data']);

