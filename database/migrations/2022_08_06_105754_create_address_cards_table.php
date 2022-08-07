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
        Schema::create('address_cards', function (Blueprint $table) {
            $table->id('id_address');
            $table->bigInteger('order_id_card')->unsigned();
            $table->string('house_number');
            $table->string('district');
            $table->string('road');
            $table->string('zone');
            $table->string('city');
            $table->string('number_post_office');
            $table->string('detail_address');
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
        Schema::dropIfExists('address_cards');
    }
};
