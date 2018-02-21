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
         DB::table('people')->insert([ [ // graphics
         	'name'=>json_encode([
         		'en'=> 'Vasilis Katsadonis',
         		'el'=> 'Βασίλης Κατσαντώνης'
         	]),
         	'email' => 'vkatsadonis@gmail.com',
          'img_src' => 'bill.png',
          'img_src_alt' => 'bill_alt.png',
          'team_type' => 'graphics'
        ],
        [
        'name'=>json_encode([
          'en'=> 'Trikka Haritina',
          'el'=> 'Τρίκκα Χαριτίνα'
        ]),
        'email' => 'xaritina.trik@gmail.com',
        'img_src' => '/images/team/graphics/haritina.png',
        'img_src_alt' => '/images/team/graphics/haritina_alt.png',
        'team_type' => 'graphics'
        ],

        [
        'name'=>json_encode([
          'en'=> 'Kotsi Sofia',
          'el'=> 'Κώτση Σοφία'
        ]),
        'email' => 'skotsi95@gmail.com',
        'img_src' => '/images/team/graphics/sofia.png',
        'img_src_alt' => '/images/team/graphics/sofia_alt.png',
        'team_type' => 'graphics'
      ],[

      'name'=>json_encode([
        'en'=> 'Boussios John',
        'el'=> 'Μπούσσιος Γιάννης'
      ]),
      'email' => 'jnbs395@gmail.com',
      'img_src' => '/images/team/graphics/john.png',
      'img_src_alt' => '/images/team/graphics/john_alt.png',
      'team_type' => 'graphics'
    ],[


      'name'=>json_encode([
        'en'=> 'Avgoustidou Nastazia',
        'el'=> 'Αυγουστίδου Ναστάζια'
      ]),
      'email' => 'n.avgoustidou@gmail.com',
      'img_src' => '/images/team/graphics/nastazia.png',
      'img_src_alt' => '/images/team/graphics/nastazia_alt.png',
      'team_type' => 'graphics'
    ],
    [

    'name'=>json_encode([
      'en'=> 'Aggelaki Evgenina',
      'el'=> 'Αγγελάκη Ευγενίνα'
    ]),
    'email' => 'angelaki.evgenia@gmail.com',
    'img_src' => '/images/team/graphics/evgenina.png',
    'img_src_alt' => '/images/team/graphics/evgenina_alt.png',
    'team_type' => 'graphics'
  ],

// it

  [

  'name'=>json_encode([
    'en'=> 'Diamantidis Theodore',
    'el'=> 'Διαμαντίδης Θοδωρής'
  ]),
  'email' => 'diamaltho@gmail.com',
  'img_src' => '/images/team/it/theodore.png',
  'img_src_alt' => '/images/team/it/theodore_alt.png',
  'team_type' => 'it'
],


[

'name'=>json_encode([
  'en'=> 'Papachristou Marios',
  'el'=> 'Παπαχρήστου Μάριος'
]),
'email' => 'papachristoumarios@gmail.com',
'img_src' => '/images/team/it/marios.png',
'img_src_alt' => '/images/team/it/marios_alt.png',
'team_type' => 'it'
],

[

'name'=>json_encode([
  'en'=> 'Daras John',
  'el'=> 'Δάρας Γιάννης'
]),
'email' => 'daras.giannhs@gmail.com',
'img_src' => '/images/team/it/john.png',
'img_src_alt' => '/images/team/it/john_alt.png',
'team_type' => 'it'
],

// media


[

'name'=>json_encode([
  'en'=> 'Boros Minas',
  'el'=> 'Μπόρος Μηνάς'
]),
'email' => 'm.boros.97@gmail.com',
'img_src' => '/images/team/media/minas.png',
'img_src_alt' => '/images/team/media/minas_alt.png',
'team_type' => 'media'
],

[

'name'=>json_encode([
  'en'=> 'Chonopoulou Helen',
  'el'=> 'Χρονοπούλου Ελένη'
]),
'email' => 'helenchrono@gmail.com',
'img_src' => '/images/team/media/helen.png',
'img_src_alt' => '/images/team/media/helen_alt.png',
'team_type' => 'media'
],

[

'name'=>json_encode([
  'en'=> 'Megalogianni Melina',
  'el'=> 'Μεγαλογιάννη Μελίνα'
]),
'email' => 'melinamegal@gmail.com',
'img_src' => '/images/team/media/melina.png',
'img_src_alt' => '/images/team/media/melina_alt.png',
'team_type' => 'media'
],

// experience

[

'name'=>json_encode([
  'en'=> 'Tsiritsis Stratis',
  'el'=> 'Τσιριτσής Στρατής'
]),
'email' => 'stsirtsis@gmail.com',
'img_src' => '/images/team/epxerience/stratis.png',
'img_src_alt' => '/images/team/experience/stratis_alt.png',
'team_type' => 'experience'
]


]);


}
}
