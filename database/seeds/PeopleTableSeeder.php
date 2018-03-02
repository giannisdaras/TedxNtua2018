<?php

use Illuminate\Database\Seeder;
use App\Person;

class PeopleTableSeeder extends Seeder {

/**
* Run the database seeds.
*
* @return void
*/

    public function run() {

        /*  Emails are the primary keys in the updateOrCreate procedure */
        /*  Thus, if you need to change the e-mail of someone,
            you will have to refresh the migrations, since otherwise the person will be
            inserted twice (one insertion per e-mail) */

        $people = [
            // graphics
            Person::updateOrCreate(
                ['email' => 'vkatsadonis@gmail.com'],
                [
                    'name' => [
                        'en' => 'Katsadonis Vasilis',
                        'el' => 'Κατσαντώνης Βασίλης'
                    ],
                    'img_src' => '/images/team/graphics/bill.jpg',
                    'img_src_alt' => '/images/team/graphics/bill_alt.jpg',
                    'team_type' => 'graphics'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'xaritina.trik@gmail.com'],
                [
                    'name' => [
                        'en' => 'Trikka Haritina',
                        'el' => 'Τρίκκα Χαριτίνα'
                    ],
                    'img_src' => '/images/team/graphics/haritina.jpg',
                    'img_src_alt' => '/images/team/graphics/haritina_alt.jpg',
                    'team_type' => 'graphics'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'jnbs395@gmail.com'],
                [
                    'name' => [
                        'en' => 'Boussios John',
                        'el' => 'Μπούσιος Γιάννης'
                    ],
                    'img_src' => '/images/team/graphics/john.jpg',
                    'img_src_alt' => '/images/team/graphics/john_alt.jpg',
                    'team_type' => 'graphics'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'alikitzou@gmail.com'],
                [
                    'name' => [
                        'en' => 'Tzouvara Alice',
                        'el' => 'Τζουβάρα Αλίκη'
                    ],
                    'img_src' => '/images/team/graphics/alice.jpg',
                    'img_src_alt' => '/images/team/graphics/alice_alt.jpg',
                    'team_type' => 'graphics'
                ]
            ),

            // it
            Person::updateOrCreate(
                ['email' => 'diamaltho@gmail.com'],
                [
                    'name' => [
                        'en' => 'Diamantidis Theodore',
                        'el' => 'Διαμαντίδης Θοδωρής'
                    ],
                    'img_src' => '/images/team/it/theodore.jpg',
                    'img_src_alt' => '/images/team/it/theodore_alt.jpg',
                    'team_type' => 'it'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'papachristoumarios@gmail.com'],
                [
                    'name' => [
                        'en' => 'Papachristou Marios',
                        'el' => 'Παπαχρήστου Μάριος'
                    ],
                    'img_src' => '/images/team/it/marios.jpg',
                    'img_src_alt' => '/images/team/it/marios_alt.jpg',
                    'team_type' => 'it'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'daras.giannhs@gmail.com'],
                [
                    'name' => [
                        'en' => 'Daras John',
                        'el' => 'Δάρας Γιάννης'
                    ],
                    'img_src' => '/images/team/it/john.jpg',
                    'img_src_alt' => '/images/team/it/john_alt.jpg',
                    'team_type' => 'it'
                ]
            ),

            // media

            Person::updateOrCreate(
                ['email' => 'm.boros.97@gmail.com'],
                [
                    'name' => [
                        'en' => 'Boros Minas',
                        'el' => 'Μπόρος Μηνάς'
                    ],
                    'img_src' => '/images/team/media/minas.jpg',
                    'img_src_alt' => '/images/team/media/minas_alt.jpg',
                    'team_type' => 'media'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'helenchrono@gmail.com'],
                [
                    'name' => [
                        'en' => 'Chronopoulou Helen',
                        'el' => 'Χρονοπούλου Ελένη'
                    ],
                    'img_src' => '/images/team/media/helen.jpg',
                    'img_src_alt' => '/images/team/media/helen_alt.jpg',
                    'team_type' => 'media'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'melinamegal@gmail.com'],
                [
                    'name' => [
                        'en' => 'Megalogianni Melina',
                        'el' => 'Μεγαλογιάννη Μελίνα'
                    ],
                    'img_src' => '/images/team/media/melina.jpg',
                    'img_src_alt' => '/images/team/media/melina_alt.jpg',
                    'team_type' => 'media'
                ]
            ),

            // experience

            Person::updateOrCreate(
                ['email' => 'stsirtsis@gmail.com'],
                [
                    'name' => [
                        'en' => 'Tsirtsis Stratis',
                        'el' => 'Τσιρτσής Στρατής'
                    ],
                    'img_src' => '/images/team/experience/stratis.jpg',
                    'img_src_alt' => '/images/team/experience/stratis_alt.jpg',
                    'team_type' => 'experience'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'gregthanasoulas@gmail.com'],
                [
                    'name' => [
                        'en' => 'Thanasoulas Gregory',
                        'el' => 'Θανάσουλας Γρηγόρης'
                    ],
                    'img_src' => '/images/team/experience/greg.jpg',
                    'img_src_alt' => '/images/team/experience/greg_alt.jpg',
                    'team_type' => 'experience'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'georgop1166@gmail.com'],
                [
                    'name' => [
                        'en' => 'Georgopoulos Vasilis',
                        'el' => 'Γεωργόπουλος Βασίλης'
                    ],
                    'img_src' => '/images/team/experience/bill.jpg',
                    'img_src_alt' => '/images/team/experience/bill_alt.jpg',
                    'team_type' => 'experience'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'danaipapado1@gmail.com'],
                [
                    'name' => [
                        'en' => 'Papadopoulou Danae',
                        'el' => 'Παπαδοπούλου Δανάη'
                    ],
                    'img_src' => '/images/team/experience/danae.jpg',
                    'img_src_alt' => '/images/team/experience/danae_alt.jpg',
                    'team_type' => 'experience'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'georgia.christodoulou@gmail.com'],
                [
                    'name' => [
                        'en' => 'Christodoulou Georgia',
                        'el' => 'Χριστοδούλου Γεωργία'
                    ],
                    'img_src' => '/images/team/experience/georgia.jpg',
                    'img_src_alt' => '/images/team/experience/georgia_alt.jpg',
                    'team_type' => 'experience'
                ]
            ),

            // venue
            Person::updateOrCreate(
                ['email' => 'stelina23@hotmail.com'],
                [
                    'name' => [
                        'en' => 'Tarassi Stelina',
                        'el' => 'Ταράση Στελίνα'
                    ],
                    'img_src' => '/images/team/venue/stelina.jpg',
                    'img_src_alt' => '/images/team/venue/stelina_alt.jpg',
                    'team_type' => 'venue'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'skotsi95@gmail.com'],
                [
                    'name' => [
                        'en' => 'Kotsi Sofia',
                        'el' => 'Κώτση Σοφία'
                    ],
                    'img_src' => '/images/team/graphics/sofia.jpg',
                    'img_src_alt' => '/images/team/graphics/sofia_alt.jpg',
                    'team_type' => 'venue'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'angelaki.evgenia@gmail.com'],
                [
                    'name' => [
                        'en' => 'Angelaki Evgenina',
                        'el' => 'Αγγελάκη Ευγενίνα'
                    ],
                    'img_src' => '/images/team/graphics/evgenina.jpg',
                    'img_src_alt' => '/images/team/graphics/evgenina_alt.jpg',
                    'team_type' => 'venue'
                ]
            ),

            // fundraising
            Person::updateOrCreate(
                ['email' => 'konstantinabaka96@gmail.com'],
                [
                    'name' => [
                        'en' => 'Baka Konstantina',
                        'el' => 'Μπάκα Κωνσταντίνα'
                    ],
                    'img_src' => '/images/team/fr/nadia.jpg',
                    'img_src_alt' => '/images/team/fr/nadia_alt.jpg',
                    'team_type' => 'fr'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'tsagarakis.stelios@hotmail.com'],
                [
                    'name' => [
                        'en' => 'Tsagarakis Stelios',
                        'el' => 'Τσαγκαράκης Στέλιος'
                    ],
                    'img_src' => '/images/team/fr/stelios.jpg',
                    'img_src_alt' => '/images/team/fr/stelios_alt.jpg',
                    'team_type' => 'fr'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'vassilismin@hotmail.com'],
                [
                    'name' => [
                        'en' => 'Minadakis Vasilis',
                        'el' => 'Μιναδάκης Βασίλης'
                    ],
                    'img_src' => '/images/team/fr/bill.jpg',
                    'img_src_alt' => '/images/team/fr/bill_alt.jpg',
                    'team_type' => 'fr'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'yanniszarkadas@gmail.com'],
                [
                    'name' => [
                        'en' => 'Zarkadas John',
                        'el' => 'Ζαρκάδας Γιάννης'
                    ],
                    'img_src' => '/images/team/fr/john.jpg',
                    'img_src_alt' => '/images/team/fr/john_alt.jpg',
                    'team_type' => 'fr'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'ioan.poulopoulos@gmail.com'],
                [
                    'name' => [
                        'en' => 'Poulopoulos John',
                        'el' => 'Πουλόπουλος Γιάννης'
                    ],
                    'img_src' => '/images/team/fr/johnp.jpg',
                    'img_src_alt' => '/images/team/fr/johnp_alt.jpg',
                    'team_type' => 'fr'
                ]
            ),

            // speakers
            Person::updateOrCreate(
                ['email' => 'nikpap555@gmail.com'],
                [
                    'name' => [
                        'en' => 'Papadopoulos Nikolas',
                        'el' => 'Παπαδόπουλος Νικόλας'
                    ],
                    'img_src' => '/images/team/speakers/nikolas.jpg',
                    'img_src_alt' => '/images/team/speakers/nikolas_alt.jpg',
                    'team_type' => 'speakers'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'kglantzounis@gmail.com'],
                [
                    'name' => [
                        'en' => 'Glantzounis Konstantinos',
                        'el' => 'Γλαντζούνης Κωνσταντίνος'
                    ],
                    'img_src' => '/images/team/speakers/kostas.jpg',
                    'img_src_alt' => '/images/team/speakers/kostas_alt.jpg',
                    'team_type' => 'speakers'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'themis.krasoudaki@gmail.com'],
                [
                    'name' => [
                        'en' => 'Krasoudaki Themis',
                        'el' => 'Κρασουδάκη Θέμις'
                    ],
                    'img_src' => '/images/team/speakers/themis.jpg',
                    'img_src_alt' => '/images/team/speakers/themis_alt.jpg',
                    'team_type' => 'speakers'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'gerasimosch@hotmail.com'],
                [
                    'name' => [
                        'en' => 'Chatzoudis Gerasimos',
                        'el' => 'Χατζούδης Γεράσιμος'
                    ],
                    'img_src' => '/images/team/speakers/jerry.jpg',
                    'img_src_alt' => '/images/team/speakers/jerry_alt.jpg',
                    'team_type' => 'speakers'
                ]
            ),

            Person::updateOrCreate(
                ['email' => 'n.avgoustidou@gmail.com'],
                [
                    'name' => [
                        'en' => 'Avgoustidou Nastazia',
                        'el' => 'Αυγουστίδου Ναστάζια'
                    ],
                    'img_src' => '/images/team/graphics/nastazia.jpg',
                    'img_src_alt' => '/images/team/graphics/nastazia_alt.jpg',
                    'team_type' => 'speakers'
                ]
            ),

        ];

    }

}
