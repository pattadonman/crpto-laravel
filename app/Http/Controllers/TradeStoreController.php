<?php

namespace App\Http\Controllers;

use App\Models\order_trade_operation;
use Illuminate\Http\Request;
use App\Models\trade_store;


class TradeStoreController extends Controller
{
    function index(){
        //return "one to one";
        //return user_login::where('id_user',1)->first();
        //return user_login::where('id_user',1)->first()->getIdCard;
        return trade_store::firstWhere('id_user',1)->getOrderTradeOperation;
    }
}
