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
           [ // graphics
         	'name'=>json_encode([
         		'en'=> 'Katsadonis Vasilis',
         		'el'=> 'Κατσαντώνης Βασίλης'
         	]),
         	'email' => 'vkatsadonis@gmail.com',
          'img_src' => '/images/team/graphics/bill.jpg',
          'img_src_alt' => '/images/team/graphics/bill_alt.jpg',
          'team_type' => 'graphics'
        ],
        [
        'name'=>json_encode([
          'en'=> 'Trikka Haritina',
          'el'=> 'Τρίκκα Χαριτίνα'
        ]),
        'email' => 'xaritina.trik@gmail.com',
        'img_src' => '/images/team/graphics/haritina.jpg',
        'img_src_alt' => '/images/team/graphics/haritina_alt.jpg',
        'team_type' => 'graphics'
        ],

        [
        'name'=>json_encode([
          'en'=> 'Kotsi Sofia',
          'el'=> 'Κώτση Σοφία'
        ]),
        'email' => 'skotsi95@gmail.com',
        'img_src' => '/images/team/graphics/sofia.jpg',
        'img_src_alt' => '/images/team/graphics/sofia_alt.jpg',
        'team_type' => 'venue'
      ],[

      'name'=>json_encode([
        'en'=> 'Boussios John',
        'el'=> 'Μπούσιος Γιάννης'
      ]),
      'email' => 'jnbs395@gmail.com',
      'img_src' => '/images/team/graphics/john.jpg',
      'img_src_alt' => '/images/team/graphics/john_alt.jpg',
      'team_type' => 'graphics'
    ],

    [

      'name'=>json_encode([
        'en'=> 'Tzouvara Alice',
        'el'=> 'Τζουβάρα Αλίκη'
      ]),
      'email' => 'alikitzou@gmail.com',
      'img_src' => '/images/team/graphics/alice.jpg',
      'img_src_alt' => '/images/team/graphics/alice_alt.jpg',
      'team_type' => 'graphics'
    ],

    [

      'name'=>json_encode([
        'en'=> 'Avgoustidou Nastazia',
        'el'=> 'Αυγουστίδου Ναστάζια'
      ]),
      'email' => 'n.avgoustidou@gmail.com',
      'img_src' => '/images/team/graphics/nastazia.jpg',
      'img_src_alt' => '/images/team/graphics/nastazia_alt.jpg',
      'team_type' => 'speakers'
    ],
    [

    'name'=>json_encode([
      'en'=> 'Aggelaki Evgenina',
      'el'=> 'Αγγελάκη Ευγενίνα'
    ]),
    'email' => 'angelaki.evgenia@gmail.com',
    'img_src' => '/images/team/graphics/evgenina.jpg',
    'img_src_alt' => '/images/team/graphics/evgenina_alt.jpg',
    'team_type' => 'venue'
  ],

// it

  [

  'name'=>json_encode([
    'en'=> 'Diamantidis Theodore',
    'el'=> 'Διαμαντίδης Θοδωρής'
  ]),
  'email' => 'diamaltho@gmail.com',
  'img_src' => '/images/team/it/theodore.jpg',
  'img_src_alt' => '/images/team/it/theodore_alt.jpg',
  'team_type' => 'it'
],


[

'name'=>json_encode([
  'en'=> 'Papachristou Marios',
  'el'=> 'Παπαχρήστου Μάριος'
]),
'email' => 'papachristoumarios@gmail.com',
'img_src' => '/images/team/it/marios.jpg',
'img_src_alt' => '/images/team/it/marios_alt.jpg',
'team_type' => 'it'
],

[

'name'=>json_encode([
  'en'=> 'Daras John',
  'el'=> 'Δάρας Γιάννης'
]),
'email' => 'daras.giannhs@gmail.com',
'img_src' => '/images/team/it/john.jpg',
'img_src_alt' => '/images/team/it/john_alt.jpg',
'team_type' => 'it'
],

// media


[

'name'=>json_encode([
  'en'=> 'Boros Minas',
  'el'=> 'Μπόρος Μηνάς'
]),
'email' => 'm.boros.97@gmail.com',
'img_src' => '/images/team/media/minas.jpg',
'img_src_alt' => '/images/team/media/minas_alt.jpg',
'team_type' => 'media'
],

[

'name'=>json_encode([
  'en'=> 'Chonopoulou Helen',
  'el'=> 'Χρονοπούλου Ελένη'
]),
'email' => 'helenchrono@gmail.com',
'img_src' => '/images/team/media/helen.jpg',
'img_src_alt' => '/images/team/media/helen_alt.jpg',
'team_type' => 'media'
],

[

'name'=>json_encode([
  'en'=> 'Megalogianni Melina',
  'el'=> 'Μεγαλογιάννη Μελίνα'
]),
'email' => 'melinamegal@gmail.com',
'img_src' => '/images/team/media/melina.jpg',
'img_src_alt' => '/images/team/media/melina_alt.jpg',
'team_type' => 'media'
],

// experience

[

'name'=>json_encode([
  'en'=> 'Tsiritsis Stratis',
  'el'=> 'Τσιριτσής Στρατής'
]),
'email' => 'stsirtsis@gmail.com',
'img_src' => '/images/team/experience/stratis.jpg',
'img_src_alt' => '/images/team/experience/stratis_alt.jpg',
'team_type' => 'experience'
],

[

'name'=>json_encode([
  'en'=> 'Thanasoulas Gregory',
  'el'=> 'Γρηγόρης Θανάσουλας'
]),
'email' => 'gregthanasoulas@gmail.com',
'img_src' => '/images/team/experience/greg.jpg',
'img_src_alt' => '/images/team/experience/greg_alt.jpg',
'team_type' => 'experience'
],

[

'name'=>json_encode([
  'en'=> 'Georgopoulos Vasilis',
  'el'=> 'Γεωργόπουλος Βασίλης'
]),
'email' => 'georgop1166@gmail.com',
'img_src' => '/images/team/experience/bill.jpg',
'img_src_alt' => '/images/team/experience/bill_alt.jpg',
'team_type' => 'experience'
],

[

'name'=>json_encode([
  'en'=> 'Papadopoulou Danae',
  'el'=> 'Παπαδοπούλου Δανάη'
]),
'email' => 'danaipapado1@gmail.com',
'img_src' => '/images/team/experience/danae.jpg',
'img_src_alt' => '/images/team/experience/danae_alt.jpg',
'team_type' => 'experience'
],

[

'name'=>json_encode([
  'en'=> 'Christodoulou Georgia',
  'el'=> 'Χριστοδούλου Γεωργία'
]),
'email' => 'georgia.christodoulou@gmail.com',
'img_src' => '/images/team/experience/georgia.jpg',
'img_src_alt' => '/images/team/experience/georgia_alt.jpg',
'team_type' => 'experience'
],

[

'name'=>json_encode([
  'en'=> 'Barka Nadia',
  'el'=> 'Μπάρκα Νάντια'
]),
'email' => 'konstantinabaka96@gmail.com',
'img_src' => '/images/team/experience/nadia.jpg',
'img_src_alt' => '/images/team/experience/nadia_alt.jpg',
'team_type' => 'experience'
],

// venue

[

'name'=>json_encode([
  'en'=> 'Tarassi Stelina',
  'el'=> 'Ταρρασή Στελίνα'
]),
'email' => 'stelina23@hotmail.com',
'img_src' => '/images/team/venue/stelina.jpg',
'img_src_alt' => '/images/team/venue/stelina_alt.jpg',
'team_type' => 'venue'
],

// fundraising

[

'name'=>json_encode([
  'en'=> 'Tsagarakis Stelios',
  'el'=> 'Τσαγκαράκης Στέλιος'
]),
'email' => 'tsagarakis.stelios@hotmail.com',
'img_src' => '/images/team/fr/stelios.jpg',
'img_src_alt' => '/images/team/fr/stelios_alt.jpg',
'team_type' => 'fr'
],

[

'name'=>json_encode([
  'en'=> 'Minadakis Vasilis',
  'el'=> 'Μιναδάκης Βασίλης'
]),
'email' => 'vassilismin@hotmail.com',
'img_src' => '/images/team/fr/bill.jpg',
'img_src_alt' => '/images/team/fr/bill_alt.jpg',
'team_type' => 'fr'
],

[

'name'=>json_encode([
  'en'=> 'Zarkadas John',
  'el'=> 'Ζαρκάδας Γιάννης'
]),
'email' => 'yanniszarkadas@gmail.com',
'img_src' => '/images/team/fr/john.jpg',
'img_src_alt' => '/images/team/fr/john_alt.jpg',
'team_type' => 'fr'
],

[

'name'=>json_encode([
  'en'=> 'Poulopoulos John',
  'el'=> 'Πουλόπουλος Γιάννης'
]),
'email' => 'ioan.poulopoulos@gmail.com',
'img_src' => '/images/team/fr/johnp.jpg',
'img_src_alt' => '/images/team/fr/johnp_alt.jpg',
'team_type' => 'fr'
],

// speakers

[

'name'=>json_encode([
  'en'=> 'Papadopoulos Nikolas',
  'el'=> 'Παπαδόπουλος Νικόλας'
]),
'email' => 'nikpap555@gmail.com',
'img_src' => '/images/team/speakers/nikolas.jpg',
'img_src_alt' => '/images/team/speakers/nikolas_alt.jpg',
'team_type' => 'speakers'
],

[

'name'=>json_encode([
  'en'=> 'Glantzounis Konstantinos',
  'el'=> 'Γλαντζούνης Κωνσταντίνος'
]),
'email' => 'kglantzounis@gmail.com',
'img_src' => '/images/team/speakers/kostas.jpg',
'img_src_alt' => '/images/team/speakers/kostas_alt.jpg',
'team_type' => 'speakers'
],

[

'name'=>json_encode([
  'en'=> 'Krasoudaki Themis',
  'el'=> 'Κρασουδάκη Θέμις'
]),
'email' => 'themis.krasoudaki@gmail.com',
'img_src' => '/images/team/speakers/themis.jpg',
'img_src_alt' => '/images/team/speakers/themis_alt.jpg',
'team_type' => 'speakers'
],

[

'name'=>json_encode([
  'en'=> 'Chatzoudis Gerasimos',
  'el'=> 'Χατζούδης Γεράσιμος'
]),
'email' => 'gerasimosch@hotmail.com',
'img_src' => '/images/team/speakers/jerry.jpg',
'img_src_alt' => '/images/team/speakers/jerry_alt.jpg',
'team_type' => 'speakers'
],



]);


}
}
