<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AddressCardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('address_cards')->insert([
            'order_id_card'=>1,
            'house_number'=>Str::random(10),
            'district'=>Str::random(10),
            'road'=>Str::random(10),
            'zone'=>Str::random(10),
            
            'city'=>Str::random(10),
            'number_post_office'=>Str::random(10),
            'detail_address'=>Str::random(10),
        ]);
        DB::table('address_cards')->insert([
            'order_id_card'=>2,
            'house_number'=>Str::random(10),
            'district'=>Str::random(10),
            'road'=>Str::random(10),
            'zone'=>Str::random(10),
            
            'city'=>Str::random(10),
            'number_post_office'=>Str::random(10),
            'detail_address'=>Str::random(10),
        ]);
    }
}
