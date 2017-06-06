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
          'identification' => 1013636219,
          'name' => 'Fabian Alexander',
          'phone' => '3143666151',
          'fax' => '3870102',
          'email' => 'admin@armagencyonline.com',
          'userType' => 'admin',
          'password' => bcrypt('armagency2017')
      ]);
    }
}
