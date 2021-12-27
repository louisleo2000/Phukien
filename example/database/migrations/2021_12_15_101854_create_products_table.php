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

            $table->increments('id');
            $table->integer('product_type_id')->unsigned();
            $table->string('name');
            $table->text('descrip');
            $table->string('img');
            $table->string('unit');
            $table->string('color');
            $table->float('rating')->default(0);
            $table->float('unit_price');
            $table->float('promo_price');
            $table->timestamps();
            $table->foreign('product_type_id')
                ->references('id')->on('product_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
