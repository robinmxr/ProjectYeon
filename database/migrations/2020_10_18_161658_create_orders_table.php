<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number')->unique();
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->decimal('total',21,2);
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('phone_number');
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->default('Incomplete');
            $table->string('order_status')->default('Pending');

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
        Schema::dropIfExists('orders');
    }

}
