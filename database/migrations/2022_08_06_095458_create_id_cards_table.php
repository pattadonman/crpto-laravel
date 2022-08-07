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
        Schema::create('id_cards', function (Blueprint $table) {
            //$table->id();
            //$table->uuid('uuid')->unique();
            //$table->Integer['key'];
            //$table->string['title'];

            //$table->bigInteger('order_id_card')->unsigned();
            //$table->primary('order_id_card');
            $table->id('order_id_card');
            $table->string('nationality');
            $table->string('type_card');
            $table->string('id_card_code_backward');
            $table->string('url_picture_backward_ID_card');
            $table->string('url_picture_forntward_ID_card');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_card_code')->unsigned();
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
        Schema::dropIfExists('id_cards');
    }
};
