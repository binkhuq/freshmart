<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150)->nullable();   
            $table->string('email',150)->nullable();
            $table->string('phone',150)->nullable();
            $table->string('address')->nullable();
            $table->integer('product_id')->unsigned();
            $table->string('product_name',150)->nullable();
            $table->integer('quantity');
            $table->integer('price');
            $table->timestamps();
           
            $table->foreign('product_id')->references('id')->on('product');
        });
       



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_detail');
    }
}
