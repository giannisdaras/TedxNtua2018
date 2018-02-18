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
        $schedules = [
            App\Schedule::create([
                'hour' => '13:12',
                'img_src' => 'scienceReactors.jpeg',
                'type' => 'performance',
                /* Be careful not to use json_encode in create method, since laravel-translatable takes care of it by itself */
                'event_title' => [
                    'en' => 'Science Reactors',
                    'el' => 'Science Reactors'
                ],
                'event_prev' => [
                    'en' => 'Why God studied Electrical Engineering',
                    'el' => 'Γιατί ο Θεός είναι ηλεκτρολόγος'
                ],
                'subtitle' => [
                    'en' => 'Justification.',
                    'el' => 'Ερμηνεία-Επεξήγηση'
                ]
            ]),
            App\Schedule::create([
                'hour' => '14:00',
                'img_src' => 'styllas.jpeg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'Michail Styllas',
                    'el' => 'Μιχάλης Στύλλας'
                ],
                'event_prev' => [
                    'en' => 'Everest, the end of chaos!',
                    'el' => 'Το τέλος του χάους στο everest!'
                ],
                'subtitle' => [
                    'en' => 'Chaos is extreme weather, chaos is extreme love!',
                    'el'=> 'Χάος είναι ο ακραίος καιρός του έβερεστ, χάος είναι η αγάπη'
                ],
                'speaker_id' => App\Speaker::create([
                    'name' => [
                        'en' => 'Michail Styllas',
                        'el' => 'Μιχάλης Στύλλας'
                    ],
                    'sid' => 'styllas',
                    'img_src' => 'styllas.jpeg',
                    'bio' => [
                        'en' => 'dede',
                        'el'=> 'δεδεδ',
                    ]
                ])->id
            ])
        ];
        
    }
}
