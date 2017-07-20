<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');
			$table->integer('category_id');
			$table->integer('image_id');
			$table->float('orginalPrice');
			$table->integer('discount');
			$table->string('status');
			$table->integer('author_id');
			$table->string('companyRelease');
			$table->string('dubishingCompany');
			$table->float('size');
			$table->integer('numberPage');
			$table->string('typeCover');
			$table->text('content');
			$table->string('slug');
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
        Schema::dropIfExists('products');
    }
}
