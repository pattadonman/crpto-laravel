<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class IdCardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('id_cards')->insert([
            'nationality'=>'thai',
            'type_card'=>'idCard',
            'id_card_code_backward'=>Str::random(10),
            'url_picture_backward_ID_card'=>'https//'.Str::random(10),

            'url_picture_forntward_ID_card'=>'https//'.Str::random(10),
            'id_user'=>1,
            'id_card_code'=>2131241431244,
        ]);
        DB::table('id_cards')->insert([
            'nationality'=>'English',
            'type_card'=>'passport',
            'id_card_code_backward'=>Str::random(10),
            'url_picture_backward_ID_card'=>'https//'.Str::random(10),
            'url_picture_forntward_ID_card'=>'https//'.Str::random(10),
            'id_user'=>2,
            'id_card_code'=>1231242314344,
        ]);
    }
}
