<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('or_id')->unique();
            $table->integer('or_as_id');
            $table->string('or_amount');
            $table->boolean('or_isadminpayed');
            $table->string('or_screenshot_admin');
            $table->string('or_screenshot_ass');
            $table->integer('or_status'); //References status
            $table->integer('or_to');
            $table->integer('or_for');
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
        Schema::drop('orders');
    }
}
