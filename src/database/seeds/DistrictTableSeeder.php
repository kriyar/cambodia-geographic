<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // reset district table
      DB::statement('SET FOREIGN_KEY_CHECKS=0');
      DB::table('districts')->truncate();

      $districts = [
        ['province_id' => 1, 'name' => 'Phnom Penh'],
        ['province_id' => 1, 'name' => 'Banteay Meanchey'],
        ['province_id' => 1, 'name' => 'Battambang'],
        ['province_id' => 1, 'name' => 'Kampong Cham'],
        ['province_id' => 1, 'name' => 'Kampong Chhnang'],
        ['province_id' => 1, 'name' => 'Kampong Speu'],
        ['province_id' => 1, 'name' => 'Kampong Thom'],
        ['province_id' => 1, 'name' => 'Kampot'],
        ['province_id' => 1, 'name' => 'Kandal'],
        ['province_id' => 1, 'name' => 'Koh Kong'],
        ['province_id' => 1, 'name' => 'Kep'],
        ['province_id' => 1, 'name' => 'Kratie'],
        ['province_id' => 1, 'name' => 'Mondulkiri'],
        ['province_id' => 1, 'name' => 'Oddar Meanchey'],
        ['province_id' => 1, 'name' => 'Pailin'],
        ['province_id' => 1, 'name' => 'Preah Sihanoukville'],
        ['province_id' => 1, 'name' => 'Preah Vihear'],
        ['province_id' => 1, 'name' => 'Pursat'],
        ['province_id' => 1, 'name' => 'Prey Veng'],
        ['province_id' => 1, 'name' => 'Ratanakiri'],
        ['province_id' => 1, 'name' => 'Siem Reap'],
        ['province_id' => 1, 'name' => 'Stung Treng'],
        ['province_id' => 1, 'name' => 'Svay Rieng'],
        ['province_id' => 1, 'name' => 'Takeo'],
        ['province_id' => 1, 'name' => 'Tbong Khmum']
      ];

      DB::table('districts')->insert($districts);
    }
}
