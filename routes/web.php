<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\IDCardController;
use App\Http\Controllers\PersonalInformationController;
use App\Http\Controllers\TradeStoreController;
use App\Http\Controllers\ReceiptController;

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

Route::get("show_one_to_one_user_to_idCard_table",[UserLoginController::class,'index']);
Route::get("show_one_to_one_idCard_to_addressCard_table",[IDCardController::class,'index']);
Route::get("show_one_to_one_PersonalInformation_to_idUser_table",[UserLoginController::class,'indexPersonInformation']);
Route::get("show_one_to_many_userLogin_to_OrderTradeOperation",[UserLoginController::class,'indexOrdertradeOperation']);
Route::get("show_one_to_many_userLogin_to_idCard",[TradeStoreController::class,'index']);
Route::get("show_one_to_many_idUser_to_tradeStore",[UserLoginController::class,'indexExchangeStore']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/billReciept',[ReceiptController::class,'index']);
Route::get('/getPrice/{id}', 'RecieptController@getPrice'); // for get city list
Route::get('/home',function(){
    return view('SalePoint');
});
Route::get('/bill',function(){
    return view('Bill');
});
