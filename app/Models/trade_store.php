<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trade_store extends Model
{
    use HasFactory;
    public function getOrderTradeOperation(){
        echo "===one to many with id_user from userLogin to idCard===";
        return $this->hasMany(order_trade_operation::class,foreignKey:'id_store',localKey:'id_store');
    }
}
