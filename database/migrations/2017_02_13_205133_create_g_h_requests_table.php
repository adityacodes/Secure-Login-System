<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGHRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_h_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('req_id'); //f key request
            $table->string('req_message');
            $table->string('req_amount');
            $table->string('req_status');
            $table->integer('account_id'); //foreign key accounts
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
        Schema::drop('g_h_requests');
    }
}
