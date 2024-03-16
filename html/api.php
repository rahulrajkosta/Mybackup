<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;

// use App\Http\Controllers\API\%%tblname%%_Controller;
use App\Http\Controllers\API\Api_logs_Controller;
use App\Http\Controllers\API\Api_transactions_Controller;
use App\Http\Controllers\API\Game_rooms_Controller;
use App\Http\Controllers\API\Game_spinner_info_Controller;
use App\Http\Controllers\API\Game_spinner_winner_Controller;
use App\Http\Controllers\API\Game_type_Controller;
use App\Http\Controllers\API\Kyc_info_Controller;
use App\Http\Controllers\API\Transaction_game_Controller;
use App\Http\Controllers\API\Transactions_Controller;
use App\Http\Controllers\API\User_info_track_Controller;
use App\Http\Controllers\API\Users_Controller;
use App\Http\Controllers\API\Wallet_Controller;
use App\Http\Controllers\API\Wallet_Winning_Controller;
use App\Http\Controllers\API\ThirdParty_Controller;
use App\Http\Controllers\API\challenges_Controller;
use App\Http\Controllers\API\Panalty_Controller;
use App\Http\Controllers\API\Spin_Count_Controller;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('otp_validate', 'otp_validate');
    Route::get('check_token', 'check_token');
});
     
// Route::middleware('auth:sanctum')->group( function () {
    // Route::resource('%%tblname%%s', %%tblname%%_Controller::class);
// });

Route::middleware('auth:sanctum')->group( function () {
						Route::resource('api_logs', api_logs_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('api_transactions', api_transactions_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('game_rooms', game_rooms_Controller::class);
						Route::POST('get_room', [game_rooms_Controller::class,'get_room']);
						Route::get('total_game', [game_rooms_Controller::class,'total_game']);
						Route::POST('update_result', [game_rooms_Controller::class,'update_result']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('game_spinner_info', game_spinner_info_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('game_spinner_winner', game_spinner_winner_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('game_type', game_type_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('kyc_info', kyc_info_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('transaction_game', transaction_game_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('transactions', transactions_Controller::class);
						Route::get('payment_trans', [transactions_Controller::class,'transaction']);
					});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('user_info_track', user_info_track_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('users', users_Controller::class);
						Route::get('totalRefered', [users_Controller::class,'totalRefered']);
						Route::get('userSetting', [users_Controller::class,'userSetting']);
						Route::get('test', [users_Controller::class,'test']);
						Route::POST('users_update', [users_Controller::class,'update']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('wallet', wallet_Controller::class); 
						Route::get('sum', [wallet_Controller::class,'sum']);
						Route::get('grantSum', [wallet_Controller::class,'grantSum']);
						Route::get('total_penalty', [wallet_Controller::class,'total_penalty']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('wallet_winning', Wallet_Winning_Controller::class); 
						Route::get('sum_winning', [Wallet_Winning_Controller::class,'sum']);
						Route::get('referalEarnings', [Wallet_Winning_Controller::class,'referalEarnings']);
						Route::get('total_penalty_winning', [Wallet_Winning_Controller::class,'total_penalty']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::GET('RoomCode', [ThirdParty_Controller::class,'RoomCode']);
						Route::GET('Results', [ThirdParty_Controller::class,'Results']);
						Route::GET('Quick', [ThirdParty_Controller::class,'Quick']);
						Route::GET('popular', [ThirdParty_Controller::class,'popular']);
						Route::POST('intialPayment', [ThirdParty_Controller::class,'intialPayment']);
						Route::POST('payment_status', [ThirdParty_Controller::class,'payment_status']);
						Route::GET('webhook', [ThirdParty_Controller::class,'webhook']);
						Route::POST('intial_bank_payout', [ThirdParty_Controller::class,'intial_bank_payout']);
						Route::POST('intial_upi_payout', [ThirdParty_Controller::class,'initial_upi_payout']);
						
					});
Route::GET('return_url', [ThirdParty_Controller::class,'return_url']);
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('challenges', challenges_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::Get('multipleAccount/{phone_no}', [Panalty_Controller::class,'multipleAccount']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('Spin_Count', Spin_Count_Controller::class);
						Route::Get('available_spin', [Spin_Count_Controller::class,'available_spin']);});

