<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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

    $created_at = Carbon::now();
    $communes = [
      ['district_id' => 1, 'name' => 'Tonle Basak', 'code' => '12301', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 1, 'name' => 'Boeng Trabek', 'code' => '12305', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 1, 'name' => 'Phsar Doeum Thkov', 'code' => '12307', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 1, 'name' => 'Toul Tum Poung 1', 'code' => '12310', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 1, 'name' => 'Toul Tum Poung 2', 'code' => '12311', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 2, 'name' => 'Sraas Chak', 'code' => '12201', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 2, 'name' => 'Wat Phnom', 'code' => '12202', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 2, 'name' => 'Phsar Chas', 'code' => '12203', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 2, 'name' => 'Phsar Kandal 1', 'code' => '12204', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 2, 'name' => 'Phsar Kandal 2', 'code' => '12205', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 2, 'name' => 'Chey Chumneas', 'code' => '12206', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 2, 'name' => 'Chak Tomuk', 'code' => '12207', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 2, 'name' => 'Phsar Thmei 1', 'code' => '12208', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 2, 'name' => 'Phsar Thmei 2', 'code' => '12209', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 2, 'name' => 'Phsar Thmei 3', 'code' => '12210', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 2, 'name' => 'Boeng Raing', 'code' => '12211', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 3, 'name' => 'Monorom', 'code' => '12251', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 3, 'name' => 'Mittapheap', 'code' => '12252', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 3, 'name' => 'Veal Vong', 'code' => '12253', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 3, 'name' => 'Orussei 1', 'code' => '12254', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 3, 'name' => 'Orussei 2', 'code' => '12255', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 3, 'name' => 'Orussei 3', 'code' => '12256', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 3, 'name' => 'Orussei 4', 'code' => '12257', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 3, 'name' => 'Boeng Prolit', 'code' => '12258', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 4, 'name' => 'Boengkok 1', 'code' => '12151', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 4, 'name' => 'Boengkok 2', 'code' => '12152', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 4, 'name' => 'Phsar Depo 1', 'code' => '12153', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 4, 'name' => 'Phsar Depo 2', 'code' => '12154', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 4, 'name' => 'Phsar Depo 3', 'code' => '12155', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 4, 'name' => 'Tuk Laak 1', 'code' => '12156', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 4, 'name' => 'Tuk Laak 2', 'code' => '12157', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 4, 'name' => 'Tuk Laak 3', 'code' => '12158', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 4, 'name' => 'Phsar Doeumkor', 'code' => '12159', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 4, 'name' => 'Boengsalang', 'code' => '12160', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 5, 'name' => 'Dang Kor', 'code' => '12401', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 5, 'name' => 'Cheung Ek', 'code' => '12415', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 5, 'name' => 'Prek Kampeus', 'code' => '8363', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 5, 'name' => 'Kong Noy', 'code' => '8361', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 5, 'name' => 'Spean Thmar', 'code' => '8370', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 5, 'name' => 'Roluos', 'code' => '8368', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 5, 'name' => 'Porng Teuk', 'code' => '12407', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 5, 'name' => 'Prey Veng', 'code' => '12408', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 5, 'name' => 'Tien', 'code' => '8372', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 5, 'name' => 'Prey Sar', 'code' => '12410', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 5, 'name' => 'Kraing Pongro', 'code' => '12412', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 5, 'name' => 'Pratas Lang', 'code' => '12413', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 5, 'name' => 'Sac Sampeou', 'code' => '12414', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 6, 'name' => 'Boeng Tumpun', 'code' => '12351', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 6, 'name' => 'Stoeung Meanchey', 'code' => '12352', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 6, 'name' => 'Chak Angre Krom', 'code' => '12353', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 6, 'name' => 'Chak Angre Leu', 'code' => '12354', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 7, 'name' => 'Russei Keo', 'code' => '12104', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 7, 'name' => 'Toul Sang Kae', 'code' => '12105', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 7, 'name' => 'Kilometer 6', 'code' => '12106', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 7, 'name' => 'Chrang Chamres 1', 'code' => '12107', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 7, 'name' => 'Chrang Chamres 2', 'code' => '12108', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 7, 'name' => 'Svay Pak', 'code' => '12109', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 8, 'name' => 'Phnom Penh Thmei', 'code' => '12101', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 8, 'name' => 'Teuk Thlar', 'code' => '12102', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 8, 'name' => 'Khmounh', 'code' => '12103', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 8, 'name' => 'Kraing Thnoung', 'code' => '12411', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 9, 'name' => 'Chom Chao', 'code' => '12405', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 9, 'name' => 'Kakap', 'code' => '12406', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 9, 'name' => 'Trapeang Krasaing', 'code' => '12402', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 9, 'name' => 'Phleung Chheh Roteh', 'code' => '12404', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 9, 'name' => 'Samraong Kraom', 'code' => '12409', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 9, 'name' => 'Boeng Thom', 'code' => '8302', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 9, 'name' => 'Kamboul', 'code' => '8305', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 9, 'name' => 'Kantaok', 'code' => '8306', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 9, 'name' => 'Ovlaok', 'code' => '8310', 'created_at' => $created_at, 'updated_at' => $created_at],
      ['district_id' => 9, 'name' => 'Snaor', 'code' => '8313', 'created_at' => $created_at, 'updated_at' => $created_at]
    ];

    DB::table('communes')->insert($communes);
  }
}
