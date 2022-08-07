<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_informations', function (Blueprint $table) {
            $table->id('id_personal_informations');
            $table->string('sex');
            $table->string('status');
            $table->string('firstname_english');
            $table->string('lastname_english');
            $table->string('firstname_thai');
            $table->string('lastname_thai');
            $table->string('birthday');
            //$table->timestamps();
            $table->bigInteger('id_user')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_informations');
    }
};
