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
          'name' => 'Administrator',
          'email' => 'admin@winnerawan.net',
          'password' => bcrypt('admin'),
          'created_at' => NOW(),
          'updated_at' => NOW()
      ]);
    }
}
