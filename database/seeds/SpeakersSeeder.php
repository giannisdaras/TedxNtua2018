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
        		'en'=> 'John',
        		'gr'=> 'Γιάννης'
        	]),
        	'picture'=>'www.facebook.com',
        	'description'=>json_encode([
        		'en'=>'Random description',
        		'gr'=>'Περιγραφή'
        	]),
        	'talk'=>json_encode([
        		'en'=>'Talk about universe',
        		'gr'=> 'Ομιλία για το σύμπαν',
        	])
        ]);
    }
}
