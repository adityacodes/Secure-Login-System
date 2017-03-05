<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('as_id')->unique();
            $table->boolean('as_status'); //Order -processing / processed
            $table->string('as_amount');  //how much money the get help person wants
            $table->integer('user_id'); // Refreneces user ID
            $table->string('as_message');  // What for ?
            $table->string('setting_selected'); 
            $table->string('as_cancel_reason');
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
        Schema::drop('assignments');
    }
}
