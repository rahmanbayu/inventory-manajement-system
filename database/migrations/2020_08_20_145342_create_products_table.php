<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('code');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('suplier_id')->unsigned();
            $table->integer('but_price');
            $table->integer('sel_price');
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('suplier_id')->references('id')->on('supliers');
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
