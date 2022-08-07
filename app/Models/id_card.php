<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class id_card extends Model
{
    use HasFactory;
    //protected $fillable = ['title'];
    //protected $primaryKey = 'uuid';
    //protected $keyType = 'int';
    //public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
   // protected $keyType = 'bigInteger';
   public function getaddressCard(){
        echo "===one to one with id_user from idCard to addressCard===";
        return $this->hasOne(address_card::class,foreignKey:'order_id_card',localKey:'order_id_card');
    }
}
