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
      ['province_id' => 1, 'name' => 'Tonle Basak', 'code' => '12301'],
      ['province_id' => 1, 'name' => 'Boeng Trabek', 'code' => '12305'],
      ['province_id' => 1, 'name' => 'Phsar Doeum Thkov', 'code' => '12307'],
      ['province_id' => 1, 'name' => 'Toul Tum Poung 1', 'code' => '12310'],
      ['province_id' => 1, 'name' => 'Toul Tum Poung 2', 'code' => '12311'],
      ['province_id' => 2, 'name' => 'Sraas Chak', 'code' => '12201'],
      ['province_id' => 2, 'name' => 'Wat Phnom', 'code' => '12202'],
      ['province_id' => 2, 'name' => 'Phsar Chas', 'code' => '12203'],
      ['province_id' => 2, 'name' => 'Phsar Kandal 1', 'code' => '12204'],
      ['province_id' => 2, 'name' => 'Phsar Kandal 2', 'code' => '12205'],
      ['province_id' => 2, 'name' => 'Chey Chumneas', 'code' => '12206'],
      ['province_id' => 2, 'name' => 'Chak Tomuk', 'code' => '12207'],
      ['province_id' => 2, 'name' => 'Phsar Thmei 1', 'code' => '12208'],
      ['province_id' => 2, 'name' => 'Phsar Thmei 2', 'code' => '12209'],
      ['province_id' => 2, 'name' => 'Phsar Thmei 3', 'code' => '12210'],
      ['province_id' => 2, 'name' => 'Boeng Raing', 'code' => '12211'],
      ['province_id' => 3, 'name' => 'Monorom', 'code' => '12251'],
      ['province_id' => 3, 'name' => 'Mittapheap', 'code' => '12252'],
      ['province_id' => 3, 'name' => 'Veal Vong', 'code' => '12253'],
      ['province_id' => 3, 'name' => 'Orussei 1', 'code' => '12254'],
      ['province_id' => 3, 'name' => 'Orussei 2', 'code' => '12255'],
      ['province_id' => 3, 'name' => 'Orussei 3', 'code' => '12256'],
      ['province_id' => 3, 'name' => 'Orussei 4', 'code' => '12257'],
      ['province_id' => 3, 'name' => 'Boeng Prolit', 'code' => '12258'],
      ['province_id' => 4, 'name' => 'Boengkok 1', 'code' => '12151'],
      ['province_id' => 4, 'name' => 'Boengkok 2', 'code' => '12152'],
      ['province_id' => 4, 'name' => 'Phsar Depo 1', 'code' => '12153'],
      ['province_id' => 4, 'name' => 'Phsar Depo 2', 'code' => '12154'],
      ['province_id' => 4, 'name' => 'Phsar Depo 3', 'code' => '12155'],
      ['province_id' => 4, 'name' => 'Tuk Laak 1', 'code' => '12156'],
      ['province_id' => 4, 'name' => 'Tuk Laak 2', 'code' => '12157'],
      ['province_id' => 4, 'name' => 'Tuk Laak 3', 'code' => '12158'],
      ['province_id' => 4, 'name' => 'Phsar Doeumkor', 'code' => '12159'],
      ['province_id' => 4, 'name' => 'Boengsalang', 'code' => '12160'],
      ['province_id' => 5, 'name' => 'Dang Kor', 'code' => '12401'],
      ['province_id' => 5, 'name' => 'Cheung Ek', 'code' => '12415'],
      ['province_id' => 5, 'name' => 'Prek Kampeus', 'code' => '8363'],
      ['province_id' => 5, 'name' => 'Kong Noy', 'code' => '8361'],
      ['province_id' => 5, 'name' => 'Spean Thmar', 'code' => '8370'],
      ['province_id' => 5, 'name' => 'Roluos', 'code' => '8368'],
      ['province_id' => 5, 'name' => 'Porng Teuk', 'code' => '12407'],
      ['province_id' => 5, 'name' => 'Prey Veng', 'code' => '12408'],
      ['province_id' => 5, 'name' => 'Tien', 'code' => '8372'],
      ['province_id' => 5, 'name' => 'Prey Sar', 'code' => '12410'],
      ['province_id' => 5, 'name' => 'Kraing Pongro', 'code' => '12412'],
      ['province_id' => 5, 'name' => 'Pratas Lang', 'code' => '12413'],
      ['province_id' => 5, 'name' => 'Sac Sampeou', 'code' => '12414']
    ];

    DB::table('communes')->insert($communes);
  }
}
