<?php

use Illuminate\Database\Seeder;

class CommuneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // reset commune table
      DB::statement('SET FOREIGN_KEY_CHECKS=0');
      DB::table('communes')->truncate();

      $communes = [
        ['district_id' => 1, 'name' => 'Phnom Penh'],
        ['district_id' => 1, 'name' => 'Banteay Meanchey'],
        ['district_id' => 1, 'name' => 'Battambang'],
        ['district_id' => 1, 'name' => 'Kampong Cham'],
        ['district_id' => 1, 'name' => 'Kampong Chhnang'],
        ['district_id' => 1, 'name' => 'Kampong Speu'],
        ['district_id' => 1, 'name' => 'Kampong Thom'],
        ['district_id' => 1, 'name' => 'Kampot'],
        ['district_id' => 1, 'name' => 'Kandal'],
        ['district_id' => 1, 'name' => 'Koh Kong'],
        ['district_id' => 1, 'name' => 'Kep'],
        ['district_id' => 1, 'name' => 'Kratie'],
        ['district_id' => 1, 'name' => 'Mondulkiri'],
        ['district_id' => 1, 'name' => 'Oddar Meanchey'],
        ['district_id' => 1, 'name' => 'Pailin'],
        ['district_id' => 1, 'name' => 'Preah Sihanoukville'],
        ['district_id' => 1, 'name' => 'Preah Vihear'],
        ['district_id' => 1, 'name' => 'Pursat'],
        ['district_id' => 1, 'name' => 'Prey Veng'],
        ['district_id' => 1, 'name' => 'Ratanakiri'],
        ['district_id' => 1, 'name' => 'Siem Reap'],
        ['district_id' => 1, 'name' => 'Stung Treng'],
        ['district_id' => 1, 'name' => 'Svay Rieng'],
        ['district_id' => 1, 'name' => 'Takeo'],
        ['district_id' => 1, 'name' => 'Tbong Khmum']
      ];

      DB::table('communes')->insert($communes);
    }
}
