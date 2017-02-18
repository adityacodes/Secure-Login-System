<?php
 
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ADITYA PADHI',
            'mobile' => '7381110897',
            're_id' => 1,
            'email' => 'adityapadhi1996@gmail.com',
            'password' => bcrypt('Aditya'),
            'admin' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'SID',
            'mobile' => '',
            're_id' => 2,
            'email' => 'siddharthdas8@gmail.com',
            'password' => bcrypt('siddas'),
            'admin' => '2',
        ]);
    }
}
