<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('helpsprovided')->default(0);
            $table->string('helpsaccepted')->default(0);
            $table->integer('re_id');
            $table->string('password');
            $table->string('dob');
            $table->string('region');
            $table->string('city');
            $table->string('country');
            $table->boolean('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->boolean('admin')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->string('twitter');
            $table->string('skype');
            $table->string('google');
            $table->string('facebook');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
