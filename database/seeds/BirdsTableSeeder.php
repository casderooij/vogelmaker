<?php

use Illuminate\Database\Seeder;

class BirdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('birds')->insert([
        'head_img' => 'head',
        'body_img' => 'body',
        'legs_img' => 'legs',
        'wing_img' => 'wings',
        'eng_name' => 'blackbird',
        'lat_name' => '...',
        'location' => 'Netherlands',
        'diet' => 'seeds',
      ]);
    }
}
