<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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

      $created_at = Carbon::now();
      $villages = [
        ['commnune_id' => 1, 'name' => 'Phum 1', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 2', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 3', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 4', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 5', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 6', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 7', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 8', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 9', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 10', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 11', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 12', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 13', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 14', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 15', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['commnune_id' => 1, 'name' => 'Phum 16', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at]
      ];

      DB::table('villages')->insert($villages);
    }
}
