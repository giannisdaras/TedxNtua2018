<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call([
            SpeakersSeeder::class,
            GeneralEventsSeeder::class,
            TalksSeeder::class,
            PerformancesSeeder::class,
            WorkshopsSeeder::class,
            PeopleTableSeeder::class,
        ]);
    }
}
