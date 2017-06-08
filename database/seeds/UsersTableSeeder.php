<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Fabian Alexander',
          'phone' => '3143666151',
          'address' => 'calle 75 a sur',
          'email' => 'admin@armagencyonline.com',
          'userType' => 'admin',
          'password' => bcrypt('armagency2017')
      ]);
    }
}
