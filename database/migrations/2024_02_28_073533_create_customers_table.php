<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
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
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->unique();
            $table->timestamp('phone_verified')->nullable();
            $table->string('password');
            $table->date('subscription_start')->comment('subscription start date');
            $table->date('subscription_end')->comment('subscription end date');
            $table->integer('payment_id')->comment('add subscription payment id');
            $table->boolean('status')->default(0)->comment('0 for inactive and 1 for active');
            $table->string('created_by');
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
        Schema::dropIfExists('customers');
    }
}
