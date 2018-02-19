<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Speakers are seeded through the Schedule seeder */
        $this->call(ScheduleSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(SpeakersSeeder::class);
    }
}
