<?php

use Illuminate\Database\Seeder;

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

      $city_provinces = [
        ['name' => 'Phnom Penh', 'code' => '12000'],
        ['name' => 'Banteay Meanchey', 'code' => null],
        ['name' => 'Battambang', 'code' => null],
        ['name' => 'Kampong Cham', 'code' => null],
        ['name' => 'Kampong Chhnang', 'code' => null],
        ['name' => 'Kampong Speu', 'code' => null],
        ['name' => 'Kampong Thom', 'code' => null],
        ['name' => 'Kampot', 'code' => null],
        ['name' => 'Kandal', 'code' => null],
        ['name' => 'Koh Kong', 'code' => null],
        ['name' => 'Kep', 'code' => null],
        ['name' => 'Kratie', 'code' => null],
        ['name' => 'Mondulkiri', 'code' => null],
        ['name' => 'Oddar Meanchey', 'code' => null],
        ['name' => 'Pailin', 'code' => null],
        ['name' => 'Preah Sihanoukville', 'code' => null],
        ['name' => 'Preah Vihear', 'code' => null],
        ['name' => 'Pursat', 'code' => null],
        ['name' => 'Prey Veng', 'code' => null],
        ['name' => 'Ratanakiri', 'code' => null],
        ['name' => 'Siem Reap', 'code' => null],
        ['name' => 'Stung Treng', 'code' => null],
        ['name' => 'Svay Rieng', 'code' => null],
        ['name' => 'Takeo', 'code' => null],
        ['name' => 'Tbong Khmum', 'code' => null]
      ];

      DB::table('city_provinces')->insert($city_provinces);
    }
}
