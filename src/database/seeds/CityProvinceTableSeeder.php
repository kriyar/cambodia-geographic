<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CityProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // reset city province table
      DB::statement('SET FOREIGN_KEY_CHECKS=0');
      DB::table('city_provinces')->truncate();

      $created_at = Carbon::now();
      $city_provinces = [
        ['name' => 'Phnom Penh', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Banteay Meanchey', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Battambang', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Kampong Cham', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Kampong Chhnang', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Kampong Speu', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Kampong Thom', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Kampot', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Kandal', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Koh Kong', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Kep', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Kratie', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Mondulkiri', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Oddar Meanchey', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Pailin', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Preah Sihanoukville', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Preah Vihear', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Pursat', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Prey Veng', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Ratanakiri', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Siem Reap', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Stung Treng', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Svay Rieng', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Takeo', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['name' => 'Tbong Khmum', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at]
      ];

      DB::table('city_provinces')->insert($city_provinces);
    }
}
