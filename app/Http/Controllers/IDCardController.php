<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\id_card;

class IDCardController extends Controller
{
    function index(){
        //return "one to one";
        //return user_login::where('id_user',1)->first();
        //return user_login::where('id_user',1)->first()->getIdCard;
        //return id_card::firstWhere('order_id_card',1);
        return id_card::firstWhere('id_user',1)->getaddressCard;
    }
}
