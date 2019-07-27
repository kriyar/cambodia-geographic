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
        ['name' => 'Banteay Meanchey'],
        ['name' => 'Battambang'],
        ['name' => 'Kampong Cham'],
        ['name' => 'Kampong Chhnang'],
        ['name' => 'Kampong Speu'],
        ['name' => 'Kampong Thom'],
        ['name' => 'Kampot'],
        ['name' => 'Kandal'],
        ['name' => 'Koh Kong'],
        ['name' => 'Kep'],
        ['name' => 'Kratie'],
        ['name' => 'Mondulkiri'],
        ['name' => 'Oddar Meanchey'],
        ['name' => 'Pailin'],
        ['name' => 'Preah Sihanoukville'],
        ['name' => 'Preah Vihear'],
        ['name' => 'Pursat'],
        ['name' => 'Prey Veng'],
        ['name' => 'Ratanakiri'],
        ['name' => 'Siem Reap'],
        ['name' => 'Stung Treng'],
        ['name' => 'Svay Rieng'],
        ['name' => 'Takeo'],
        ['name' => 'Tbong Khmum']
      ];

      DB::table('city_provinces')->insert($city_provinces);
    }
}
