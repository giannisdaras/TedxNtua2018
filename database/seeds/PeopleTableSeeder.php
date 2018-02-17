<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('people')->insert([
         	'name'=>json_encode([
         		'en'=> 'Bob Ross',
         		'el'=> 'Μπομπ Ρος'
         	]),
         	'email' => 'bobross@gmail.com',
          'img_src' => 'https://vignette.wikia.nocookie.net/epicrapbattlesofhistory/images/e/eb/Deal_with_it_rainbow_style_by_j_brony-d4cwgad.png',
          'img_src_alt' => 'http://vignette1.wikia.nocookie.net/spongebob/images/3/31/8468-spongebob-square-pants-spongebobs-face.jpg/revision/latest?cb=20121014113555',
          'team_type' => 'it'
        ]);
     }
}
