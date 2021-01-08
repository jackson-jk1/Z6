<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomerJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_jobs', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['RE','PA','CA']);
            $table->bigInteger('id_product')->unsigned()->nullable();
            $table->foreign('id_product')->references('id')->on('products');
            $table->bigInteger('id_customers')->unsigned()->nullable();
            $table->foreign('id_customers')->references('id')->on('customers');
            $table->bigInteger('id_booster')->unsigned()->nullable();
            $table->foreign('id_booster')->references('id')->on('boosters');
            $table->decimal('value',6,2)->default(0);
            $table->decimal('promotion',6,2)->nullable()->unsigned();


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
        Schema::dropIfExists('customers_jobs');
    }
}
