<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistraions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registraions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('email');
            $table->integer('phone_number');
            $table->enum('type',['buyer','seller']);
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
        Schema::dropIfExists('registraions');
    }
}
