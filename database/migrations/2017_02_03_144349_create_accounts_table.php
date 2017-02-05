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
            $table->string('account_id')->nullable();
            $table->string('account_name');
            $table->string('account_currency');
            $table->string('bank_name'); // Automatic Bitcoin
            $table->string('account_type'); //Bitcoin or something else (if any)
            $table->string('account_number');
            $table->string('account_holder')->nullable();
            $table->string('beneficiary_name');
            $table->integer('user_id');
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
