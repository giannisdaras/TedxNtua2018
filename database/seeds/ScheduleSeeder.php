<?php

use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder {
    /**
     * @return void
     */
    public function run() {
        $this->call(GeneralEventsSeeder::class);
        $this->call(TalksSeeder::class);
        $this->call(PerformancesSeeder::class);
        $this->call(WorkshopsSeeder::class);
    }
}
