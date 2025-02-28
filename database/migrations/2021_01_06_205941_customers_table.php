<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['RE','PA','CA']);
            $table->string('nick');
            $table->string('phone');
            $table->string('division_now')->nullable();
            $table->string('division_job');
            $table->bigInteger('id_booster')->unsigned()->nullable();
            $table->foreign('id_booster')->references('id')->on('boosters');
            $table->bigInteger('id_customer')->unsigned()->nullable();
            $table->foreign('id_customer')->references('id')->on('users');
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
        Schema::dropIfExists('customers');
    }
}
