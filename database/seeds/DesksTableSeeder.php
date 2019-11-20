<?php

use Illuminate\Database\Seeder;

class DesksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('desks')->insert([
          'name' => 'Table Number 1',
          'capacity' => '4',
          'available' => '1',
          'created_at' => NOW(),
          'updated_at' => NOW()
      ]);
      DB::table('desks')->insert([
          'name' => 'Table Number 2',
          'capacity' => '4',
          'available' => '1',
          'created_at' => NOW(),
          'updated_at' => NOW()
      ]);
      DB::table('desks')->insert([
          'name' => 'Table Number 3',
          'capacity' => '2',
          'available' => '1',
          'created_at' => NOW(),
          'updated_at' => NOW()
      ]);
      DB::table('desks')->insert([
          'name' => 'Table Number 4',
          'capacity' => '6',
          'available' => '1',
          'created_at' => NOW(),
          'updated_at' => NOW()
      ]);
    }
}
