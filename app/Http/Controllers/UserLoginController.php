<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_login;

class UserLoginController extends Controller
{
    function index(){
        //return "one to one";
        //return user_login::where('id_user',1)->first();
        //return user_login::where('id_user',1)->first()->getIdCard;
        return user_login::firstWhere('id_user',1)->getIdCard;
    }

    function indexPersonInformation(){
        //return "one to one";
        //return user_login::where('id_user',1)->first();
        //return user_login::where('id_user',1)->first()->getIdCard;
        return user_login::firstWhere('id_user',1)->getPersonInformation;
    }
    function indexOrderTradeOperation(){
        return user_login::firstWhere('id_user',1)->getOrderTradeOperation;
    }
    function indexExchangeStore(){
        return user_login::firstWhere('id_user',1)->getExchangeStore;
    }
}
