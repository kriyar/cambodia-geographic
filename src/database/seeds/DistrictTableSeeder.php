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
        ['province_id' => 1, 'name' => 'Chamkar Mon', 'code' => '12300'],
        ['province_id' => 1, 'name' => 'Doun Penh', 'code' => '12200'],
        ['province_id' => 1, 'name' => 'Prampir Meakkakra', 'code' => '12250'],
        ['province_id' => 1, 'name' => 'Toul Kok', 'code' => '12150'],
        ['province_id' => 1, 'name' => 'Dang Kor', 'code' => '12400'],
        ['province_id' => 1, 'name' => 'Mean Chey', 'code' => '12350'],
        ['province_id' => 1, 'name' => 'Russey Keo', 'code' => '12100'],
        ['province_id' => 1, 'name' => 'Sen Sok', 'code' => null],
        ['province_id' => 1, 'name' => 'Por Senchey', 'code' => null],
        ['province_id' => 1, 'name' => 'Chroy Chongvar', 'code' => null],
        ['province_id' => 1, 'name' => 'Prek Pnov', 'code' => null],
        ['province_id' => 1, 'name' => 'Chbar Ampov', 'code' => null],
        ['province_id' => 1, 'name' => 'Boeng Keng Kang', 'code' => null]
      ];

      DB::table('districts')->insert($districts);
    }
}
