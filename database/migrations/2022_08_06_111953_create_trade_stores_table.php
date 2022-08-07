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
        Schema::create('trade_stores', function (Blueprint $table) {
            $table->id('id_store');
            $table->bigInteger('id_user')->unsigned();
            $table->string('type_crypto_have');
            $table->string('type_crypto_hope');
           // $table->bigInteger('id_trade_number')->unsigned();
            $table->string('date_end');
            $table->string('date_begin');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trade_stores');
    }
};
