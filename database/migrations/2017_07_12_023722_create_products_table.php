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
            $table->string('name');
            $table->string('slug');
            $table->longText('desciption')->nullable();
            $table->integer('unit_price')->unsigned();
            $table->integer('discount')->unsigned();
            $table->string('image');
            $table->string('note')->nullable();
            $table->string('size');
            $table->string('guarantee');
            $table->string('material');
            $table->string('hot');
            $table->boolean('is_hidden')->default(0);
            $table->integer('category_id')->unsigned();
            $table->integer('image_id')->unsigned();
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
