<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_login extends Model
{
    use HasFactory;
    public function getIdCard(){
        echo "===one to one with id_user from userLogin to idCard===";
        return $this->hasOne(id_card::class,foreignKey:'id_user',localKey:'id_user');
    }
    public function getPersonInformation(){
        echo "===one to one with id_user from userLogin to personal_information===";
        return $this->hasOne(personal_information::class,foreignKey:'id_user',localKey:'id_user');
    }
    public function getOrderTradeOperation(){
        echo "===one to many with id_user from userLogin to order_trade_operation===";
        return $this->hasMany(order_trade_operation::class,foreignKey:'id_sender',localKey:'id_user');
    }
    public function getExchangeStore(){
        echo "===one to many with id_user from userLogin to trade_store===";
        return $this->hasMany(trade_store::class ,foreignKey:'id_user',localKey:'id_user');
    }
}
