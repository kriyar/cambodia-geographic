<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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

      $created_at = Carbon::now();
      $districts = [
        ['province_id' => 1, 'name' => 'Chamkar Mon', 'code' => '12300', 'created_at' => $created_at, 'updated_at' => $created_at],
        ['province_id' => 1, 'name' => 'Doun Penh', 'code' => '12200', 'created_at' => $created_at, 'updated_at' => $created_at],
        ['province_id' => 1, 'name' => 'Prampir Meakkakra', 'code' => '12250', 'created_at' => $created_at, 'updated_at' => $created_at],
        ['province_id' => 1, 'name' => 'Toul Kok', 'code' => '12150', 'created_at' => $created_at, 'updated_at' => $created_at],
        ['province_id' => 1, 'name' => 'Dang Kor', 'code' => '12400', 'created_at' => $created_at, 'updated_at' => $created_at],
        ['province_id' => 1, 'name' => 'Mean Chey', 'code' => '12350', 'created_at' => $created_at, 'updated_at' => $created_at],
        ['province_id' => 1, 'name' => 'Russey Keo', 'code' => '12100', 'created_at' => $created_at, 'updated_at' => $created_at],
        ['province_id' => 1, 'name' => 'Sen Sok', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['province_id' => 1, 'name' => 'Por Senchey', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['province_id' => 1, 'name' => 'Chroy Chongvar', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['province_id' => 1, 'name' => 'Prek Pnov', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['province_id' => 1, 'name' => 'Chbar Ampov', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at],
        ['province_id' => 1, 'name' => 'Boeng Keng Kang', 'code' => null, 'created_at' => $created_at, 'updated_at' => $created_at]
      ];

      DB::table('districts')->insert($districts);
    }
}
