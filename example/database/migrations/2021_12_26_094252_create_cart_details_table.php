<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {

            $table->integer('cart_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('color')->default(null);
            $table->integer('quantity')->default(1);
            $table->integer('total')->default(0);
            $table->timestamps();
            $table->primary(array('cart_id', 'product_id'));
            $table->foreign('cart_id')
                ->references('id')->on('carts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('product_id')
                ->references('id')->on('products')
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
        Schema::dropIfExists('cart_details');
    }
}
