<?php
use App\Http\Controllers\Mycnt;
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
    return view('index');
});
Route::post('save',[Mycnt::class,'insert']);
Route::get('display',[Mycnt::class,'display']);
Route::get('upd',[Mycnt::class,'update']);
Route::get('del',[Mycnt::class,'delete']);
