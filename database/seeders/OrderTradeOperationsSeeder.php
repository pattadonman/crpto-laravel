<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class OrderTradeOperationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_trade_operations')->insert([
            'id_store'=>1,
            'id_sender'=>1,
            'id_reciver'=>2,
            'type_operation'=>"sale",
            'type_crypto_receive_get'=>'BTC',
            
            'type_crypto_send_get'=>'Baht',
            'status_operation'=>'success',
        ]);
        DB::table('order_trade_operations')->insert([
            'id_store'=>1,
            'id_sender'=>1,
            'id_reciver'=>2,
            'type_operation'=>"transfer",
            'type_crypto_receive_get'=>'BTC',
            
            'type_crypto_send_get'=>'BTC',
            'status_operation'=>'fail',
        ]);
    }
}
