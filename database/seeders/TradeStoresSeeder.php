<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class TradeStoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trade_stores')->insert([
            'id_user'=>1,
            'type_crypto_have'=>'BTC',
            'type_crypto_hope'=>'Baht',
            'date_end'=>'20/1/2022',
            'date_begin'=>'1/1/2022',
            
        ]);
        DB::table('trade_stores')->insert([
            'id_user'=>1,
            'type_crypto_have'=>'BTC',
            'type_crypto_hope'=>'BTC',
            'date_end'=>'20/1/2022',
            'date_begin'=>'1/1/2022',
            
        ]);
    }
}
