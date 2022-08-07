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
        Schema::create('order_trade_operations', function (Blueprint $table) {
            $table->id('id_trade_number');
            $table->bigInteger('id_store')->unsigned();
            $table->bigInteger('id_sender')->unsigned();
            $table->bigInteger('id_reciver')->unsigned();
            $table->string('type_operation');
            $table->string('type_crypto_receive_get');
            $table->string('type_crypto_send_get');
            $table->string('status_operation');
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
        Schema::dropIfExists('order_trade_operations');
    }
};
