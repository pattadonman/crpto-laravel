<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class PersonalInformationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_informations')->insert([
            'sex'=>'man',
            'status'=>'sigle',
            'firstname_english'=>'pattadon',
            'lastname_english'=>'nutes',
            'firstname_thai'=>'พัทธดนย์',
            
            'lastname_thai'=>'หนูเทศ',
            'birthday'=>'10/2/2022',
            'id_user'=>1,
        ]);
        DB::table('personal_informations')->insert([
            'sex'=>'woman',
            'status'=>'married',
            'firstname_english'=>'soksw',
            'lastname_english'=>'dwww',
            'firstname_thai'=>'สมหญิง',
            
            'lastname_thai'=>'ดี',
            'birthday'=>'10/3/2022',
            'id_user'=>2,
        ]);
    }
}
