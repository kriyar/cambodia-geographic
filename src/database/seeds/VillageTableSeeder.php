<?php

use Illuminate\Database\Seeder;

class VillageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // reset villages table
      DB::statement('SET FOREIGN_KEY_CHECKS=0');
      DB::table('villages')->truncate();

      $villages = [
        ['commnune_id' => 1, 'name' => 'Phum 1'],
        ['commnune_id' => 1, 'name' => 'Phum 2'],
        ['commnune_id' => 1, 'name' => 'Phum 3'],
        ['commnune_id' => 1, 'name' => 'Phum 4'],
        ['commnune_id' => 1, 'name' => 'Phum 5'],
        ['commnune_id' => 1, 'name' => 'Phum 6'],
        ['commnune_id' => 1, 'name' => 'Phum 7'],
        ['commnune_id' => 1, 'name' => 'Phum 8'],
        ['commnune_id' => 1, 'name' => 'Phum 9'],
        ['commnune_id' => 1, 'name' => 'Phum 10'],
        ['commnune_id' => 1, 'name' => 'Phum 11'],
        ['commnune_id' => 1, 'name' => 'Phum 12'],
        ['commnune_id' => 1, 'name' => 'Phum 13'],
        ['commnune_id' => 1, 'name' => 'Phum 14'],
        ['commnune_id' => 1, 'name' => 'Phum 15'],
        ['commnune_id' => 1, 'name' => 'Phum 16']
      ];

      DB::table('villages')->insert($villages);
    }
}
