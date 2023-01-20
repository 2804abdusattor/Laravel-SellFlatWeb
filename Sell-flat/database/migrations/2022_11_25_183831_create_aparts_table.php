<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aparts', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('owner_email');
            $table->string('owner_phone');
            $table->string('owner_address');
            $table->string('owner_country');
            $table->string('address_apart');
            $table->string('number_home');
            $table->string('number_flat');
            $table->string('price_apart');
            $table->string('total_area');
            $table->string('living_space');
            $table->string('room_apart');
            $table->string('type_of_home');
            $table->string('floor_apart');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aparts');
    }
}
