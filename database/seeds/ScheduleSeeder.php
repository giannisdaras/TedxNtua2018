<?php

use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Seeder for both schedule events AND speakers
     * since speakers need to be binded to the talks
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
            /*  When creating a schedule with type TALK, you have to create the Speaker object along with it
                see below for example
            */
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
                    'en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'el'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
                ],
                /* This is where the Speaker object is created with its proper attributes */
                'speaker_id' => App\Speaker::create([
                    'name' => [
                        'en' => 'Michail Styllas',
                        'el' => 'Μιχάλης Στύλλας'
                    ],
                    'sid' => 'styllas',
                    'img_src' => 'styllas_alt.jpg',
                    'img_src_alt' => 'styllas.jpg',
                    'link' => 'https://www.researchgate.net/profile/Michael_Styllas',
                    'bio' => [
                        'en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'el' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    ]
                /* Create the object and return its id */
                ])->id
            ]),

            App\Schedule::create([
                'hour' => '16:00',
                'img_src' => 'romy-lorenz.jpeg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'Romy Lorenz',
                    'el' => 'Romy Lorenz'
                ],
                'event_prev' => [
                    'en' => 'Unwinding the neuron paths',
                    'el' => 'Ξετυλίγοντας τα μονοπάτια των νευρώνων'
                ],
                'subtitle' => [
                    'en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'el'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
                ],
                /* This is where the Speaker object is created with its proper attributes */
                'speaker_id' => App\Speaker::create([
                    'name' => [
                        'en' => 'Romy Lorenz',
                        'el' => 'Romy Lorenz'
                    ],
                    'sid' => 'romy-lorenz',
                    'img_src' => 'romy-lorenz.jpg',
                    'img_src_alt' => 'romy-lorenz.jpg',
                    'link' => '/#map',
                    'bio' => [
                        'en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'el'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    ]
                /* Create the object and return its id */
                ])->id
            ]),
        ];

    }
}
