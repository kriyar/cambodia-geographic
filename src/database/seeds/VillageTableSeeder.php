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
        ['commnune_id' => 1, 'name' => 'Phnom Penh'],
        ['commnune_id' => 1, 'name' => 'Banteay Meanchey'],
        ['commnune_id' => 1, 'name' => 'Battambang'],
        ['commnune_id' => 1, 'name' => 'Kampong Cham'],
        ['commnune_id' => 1, 'name' => 'Kampong Chhnang'],
        ['commnune_id' => 1, 'name' => 'Kampong Speu'],
        ['commnune_id' => 1, 'name' => 'Kampong Thom'],
        ['commnune_id' => 1, 'name' => 'Kampot'],
        ['commnune_id' => 1, 'name' => 'Kandal'],
        ['commnune_id' => 1, 'name' => 'Koh Kong'],
        ['commnune_id' => 1, 'name' => 'Kep'],
        ['commnune_id' => 1, 'name' => 'Kratie'],
        ['commnune_id' => 1, 'name' => 'Mondulkiri'],
        ['commnune_id' => 1, 'name' => 'Oddar Meanchey'],
        ['commnune_id' => 1, 'name' => 'Pailin'],
        ['commnune_id' => 1, 'name' => 'Preah Sihanoukville'],
        ['commnune_id' => 1, 'name' => 'Preah Vihear'],
        ['commnune_id' => 1, 'name' => 'Pursat'],
        ['commnune_id' => 1, 'name' => 'Prey Veng'],
        ['commnune_id' => 1, 'name' => 'Ratanakiri'],
        ['commnune_id' => 1, 'name' => 'Siem Reap'],
        ['commnune_id' => 1, 'name' => 'Stung Treng'],
        ['commnune_id' => 1, 'name' => 'Svay Rieng'],
        ['commnune_id' => 1, 'name' => 'Takeo'],
        ['commnune_id' => 1, 'name' => 'Tbong Khmum']
      ];

      DB::table('villages')->insert($villages);
    }
}
