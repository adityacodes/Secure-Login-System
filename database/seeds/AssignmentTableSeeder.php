<?php 

use Illuminate\Database\Seeder;

class AssignmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('assignments')->insert([
            'as_id' => 'AS121213131',
            'as_status' => 1,
            'as_amount' => '300',
            'user_id' => 1,
            'as_message' => 'This is Order Processing message',
            'setting_selected' => 'asdasdsadsad',
            'as_cancel_reason' => 'Order Processing was the reason'

        ]);
    }
}
