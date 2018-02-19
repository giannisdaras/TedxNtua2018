<?php

use Illuminate\Database\Seeder;

class SpeakersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('speakers')->insert([
        	'name'=>json_encode([
        		'en'=> 'Michail Styllas',
        		'el'=> 'Μιχάλης Στύλας'
        	]),
            'id'=>'styllas',
            'img_src'=>'styllas.jpeg',
        	'talk_title'=>json_encode([
        		'en'=>'Everest, the end of chaos!',
        		'el'=> 'Το τέλος του χάους στο everest!',
        	]),
            'talk_prev'=>json_encode([
                'en'=>'Chaos is  ** extreme weather **, chaos is extreme love!',
                'el'=>'Χάος είναι ο ακραίος καιρός του έβερεστ, χάος είναι η αγάπη'
            ]),
            'bio'=>json_encode([
                'en'=>'dede',
                'el'=>'δεδεδ'
            ])
        ]);
    }
}
