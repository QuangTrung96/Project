<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediate', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('order_id');
            $table->dateTime('buyDate');
            $table->float('boughtPrice');
            $table->float('recentPrice');
            $table->dateTime('createAt');
            $table->dateTime('updateAt');
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
        Schema::dropIfExists('mediate');
    }
}
