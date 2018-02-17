<?php

use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
        	'hour'=>'13:12',
        	'img_src'=>'scienceReactors.jpeg',
        	'type'=>'performance',
        	'event_title'=>json_encode([
        		'en'=>'Science Reactors',
        		'el'=> 'Science Reactors',
        	]),
            'event_prev'=>json_encode([
                'en'=>'Why god studied electrical engineering',
                'el'=>'Γιατί ο θεός είναι ηλεκτρολόγος',
            ]),
            'subtitle'=>json_encode([
                'en'=>'Justification.',
                'el'=>'Ερμηνεία-Επεξήγηση.',
            ])
        ]);


        
    }
}
