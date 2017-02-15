<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ac_id')->nullable()->unique();
            $table->string('ac_name');
            $table->string('ac_currency');
            $table->string('bank_name'); // Automatic Bitcoin
            $table->string('ac_type'); //Bitcoin or something else (if any)
            $table->string('ac_number');
            $table->string('ac_holder')->nullable();
            $table->string('beneficiary_name');
            $table->integer('user_id'); //References User table
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
        Schema::drop('accounts');
    }
}
