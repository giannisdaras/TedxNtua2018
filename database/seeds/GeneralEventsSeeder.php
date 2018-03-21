<?php

use Illuminate\Database\Seeder;

class GeneralEventsSeeder extends Seeder {
    /**
     * @return void
     */
    public function run() {

        $general = [
            App\Schedule::updateOrCreate(['sid' => 'registration'], [
                'hour' => '10:30',
                'visible' => true,
                'img_src' => '/images/schedule/registration.png',
                'type' => 'general',
                'event_title' => [
                    'en' => 'Reception & Registration',
                    'el' => 'Υποδοχή & Εγγραφή'
                ],
                'event_prev' => [
                    'en' => 'Doors open and breakfast is served (10:30-11:30)',
                    'el' => 'Οι πόρτες ανοίγουν και σερβίρεται πρωινό (10:30-11:30)'
                ],
                'subtitle' => [
                    'en' => 'Don\'t forget to bring your ticket: a **piece of clothing** or a **blanket** that will be given to people in need.',
                    'el' => 'Μην ξεχάσετε το εισιτήριό σας: ένα **ρούχο** ή μία **κουβέρτα** που θα δοθεί σε ανθρώπους που το έχουν ανάγκη.'
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'session-1'], [
                'hour' => '11:30',
                'visible' => true,
                'img_src' => '/images/schedule/thumb-emergence.png',
                'type' => 'general',
                'event_title' => [
                    'en' => 'Session 1',
                    'el' => 'Session 1'
                ],
                'event_prev' => [
                    'en' => 'Emergence (11:30-13:00)',
                    'el' => 'Emergence (11:30-13:00)'
                ],
                'subtitle' => [
                    'en' => '',
                    'el' => ''
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'welcome'], [
                'hour' => '11:45',
                'visible' => true,
                'img_src' => '/images/schedule/welcome.png',
                'type' => 'general',
                'event_title' => [
                    'en' => 'Welcome speeches',
                    'el' => 'Καλωσόρισμα'
                ],
                'event_prev' => [
                    'en' => 'Addresses by the NTUA Rector I. Golias, by Th. Varvarigou and our TEDxNTUA 2018 curator (11:45-12:00)',
                    'el' => 'Προσφωνήσεις από τον Πρύτανη του ΕΜΠ Ι. Γκόλια, τη Θ. Βαρβαρίγου και τον curator μας για το TEDxNTUA 2018 (11:45-12:00)'
                ],
                'subtitle' => [
                    'en' => 'The NTUA Rector, Ioannis Golias, the TEDxNTUA academic coordinator, Theodora Varvarigou, and the TEDxNTUA 2018 curator, Vasilis Katsadonis, **welcome** the participants of the event.',
                    'el' => 'Ο Πρύτανης του ΕΜΠ Ιωάννης Γκόλιας, η Ακαδημαϊκή Υπεύθυνη του TEDxNTUA Θεοδώρα Βαρβαρίγου και ο curator του TEDxNTUA 2018 Βασίλης Κατσαντώνης **καλωσορίζουν** το κοινό της εκδήλωσης.'
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'break-1'], [
                'hour' => '13:30',
                'visible' => true,
                'img_src' => '/images/schedule/break-1.png',
                'type' => 'general',
                'event_title' => [
                    'en' => '1<sup>st</sup> Break',
                    'el' => '1<sup>ο</sup> Διάλειμμα'
                ],
                'event_prev' => [
                    'en' => 'Lunch, Q&A with the speakers, workshops and relaxation',
                    'el' => 'Γεύμα, Q&A με τους ομιλητές, workshops και χαλάρωση'
                ],
                'subtitle' => [
                    'en' => 'The speakers of the 1<sup>st</sup> session will answer to your **questions** in the Simulcast room and lunch will be served.',
                    'el' => 'Οι ομιλητές του 1<sup>ου</sup> session θα απαντήσουν στις **ερωτήσεις** σας στην Αίθουσα Simulcast και θα σερβιριστεί γεύμα.'
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'session-2'], [
                'hour' => '15:00',
                'visible' => true,
                'img_src' => '/images/schedule/thumb-divergence.png',
                'type' => 'general',
                'event_title' => [
                    'en' => 'Session 2',
                    'el' => 'Session 2'
                ],
                'event_prev' => [
                    'en' => 'Divergence (15:00-17:00)',
                    'el' => 'Divergence (15:00-17:00)'
                ],
                'subtitle' => [
                    'en' => '',
                    'el' => ''
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'break-2'], [
                'hour' => '17:00',
                'visible' => true,
                'img_src' => '/images/schedule/break-2.png',
                'type' => 'general',
                'event_title' => [
                    'en' => '2<sup>nd</sup> Break',
                    'el' => '2<sup>ο</sup> Διάλειμμα'
                ],
                'event_prev' => [
                    'en' => 'Coffee and beverages, Q&A with the speakers, workshops and relaxation',
                    'el' => 'Καφές και ποτά, Q&A με τους ομιλητές, workshops και χαλάρωση'
                ],
                'subtitle' => [
                    'en' => 'The speakers of the 2<sup>nd</sup> session will answer to your **questions** in the Simulcast room. Coffee and beverages will be served.',
                    'el' => 'Οι ομιλητές του 2<sup>ου</sup> session θα απαντήσουν στις **ερωτήσεις** σας στην Αίθουσα Simulcast. Θα σερβιριστεί καφές και ποτά (αναψυκτικά, ροφήματα κλπ).'
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'session-3'], [
                'hour' => '18:00',
                'visible' => true,
                'img_src' => '/images/schedule/thumb-convergence.png',
                'type' => 'general',
                'event_title' => [
                    'en' => 'Session 3',
                    'el' => 'Session 3'
                ],
                'event_prev' => [
                    'en' => 'Convergence (18:00-20:00)',
                    'el' => 'Convergence (18:00-20:00)'
                ],
                'subtitle' => [
                    'en' => '',
                    'el' => ''
                ],
            ]),
            
            App\Schedule::updateOrCreate(['sid' => 'after-party'], [
                'hour' => '21:00',
                'visible' => true,
                'img_src' => '/images/schedule/after-party.png',
                'type' => 'general',
                'event_title' => [
                    'en' => 'After Party',
                    'el' => 'After Party'
                ],
                'event_prev' => [
                    'en' => 'It\'s a secret',
                    'el' => 'Είναι μυστικό'
                ],
                'subtitle' => [
                    'en' => '',
                    'el' => ''
                ],
            ]),
        ];

    }

}