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
            'referfriend' => 'aditya7381',
            'email' => 'adityapadhi1996@gmail.com',
            'password' => bcrypt('Aditya'),
            'admin' => '1',
        ]);
    }
}
