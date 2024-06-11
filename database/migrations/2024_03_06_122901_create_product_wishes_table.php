<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductWishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_wishes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
           
            $table->string('product_wish');
            $table->tinyInteger('status')->comment('0: Deactivate, 1: Activate')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('product_wishes');
    }
}
