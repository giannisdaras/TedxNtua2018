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
            App\Schedule::updateOrCreate(['sid' => 'scienceReactors'], [
                'hour' => '13:12',
                'visible' => false,
                'img_src' => '/images/schedule/scienceReactors.jpeg',
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
            App\Schedule::updateOrCreate(['sid' => 'styllas'], [
                'hour' => '14:00',
                'visible' => false,
                'img_src' => '/images/speakers/styllas_alt.jpg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'Michael Styllas',
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
                'speaker_id' => App\Speaker::updateOrCreate(['sid' => 'styllas'], [
                    'name' => [
                        'en' => 'Michael Styllas',
                        'el' => 'Μιχάλης Στύλλας'
                    ],
                    'occupation' => [
                        'en' => 'Geology Researcher – Mountaineer',
                        'el' => 'Ερευνητής Γεωλογίας – Ορειβάτης'
                    ],
                    'visible' => false,
                    'img_src' => 'styllas-1.jpg',
                    'img_src_alt' => 'styllas-2.jpg',
                    'link' => 'https://www.researchgate.net/profile/Michael_Styllas',
                    'bio' => [
                        'en' => '
Michael Styllas was attracted to the mountains from a very young age. This, gradually led him to fall in love with the science of Geology. He received his BSc degree in Geology in 1998 from Aristotle University of Thessaloniki to continue his studies in the College of Oceanic and Atmospheric Sciences of Oregon State University (USA), where he received his Master’s in Science (MSc) degree in Oceanography – Marine Geology. During his PhD he received an EU sponsored Marie Curie Early Stag.e Researcher Fellowship, where he was specialized in the field of Paleoclimatology in Bjerknes Centre for Climate Research of the University of Bergen, in Norway. He received his PhD diploma in Geology – Sedimentology in 2009 from Aristotle University of Thessaloniki.

Since 2006 he works as an external geologist for GEOSERVICE Ltd, with which has realized numerous geophysical, geotechnical and geoarchaeological projects, and has participated in four EU-funded projects that mainly deal with sustainability and reuse methods and technologies of water resources through the artificial recharge of aquifers. Between 2015-2017 and as an independent researcher he studied the evolution of glaciers and the climate on Mount Olympus in Greece, during a project funded by John S. Latsis foundation in cooperation with researchers from the French National research institute CEREGE (Centre de Recherche et d’Enseignement de Géosciences de l’Environnement).

In addition to his academic activities, since 2004 he has been managing the alpine refuge Christos Kakkalos on Mount Olympus and has climbed extensively on the mountains of Greece, as well as on the peaks of the Alps, Norway, Russia and North America. He has participated in 10 expeditions in the Andes and the Himalaya and was a member of the first successful Greek expedition that stood on the summit of Mount Everest.
',
                        'el' => '
O Μιχάλης Στύλλας αγάπησε τα βουνά από πολύ μικρή ηλικία. Αυτό σταδιακά τον οδήγησε στην επιστήμη της Γεωλογίας. Το 1998 έλαβε το πτυχίο γεωλογίας από το Αριστοτέλειο Πανεπιστήμιο Θεσσαλονίκης το 1998 και συνέχισε τις σπουδές του, στο Oregon State University – College of Oceanic and Atmospheric Sciences (Η.Π.Α.) από όπου απέκτησε το Master of Science (MSc) το 2001 στην Ωκεανογραφία – Θαλάσσια Γεωλογία. Στα πλαίσια εκπόνησης της διδακτορικής του διατριβής έλαβε την υποτροφία της Ευρωπαϊκής Ένωσης Marie Curie Early Stage Researcher, όπου ειδικεύτηκε στην παλαιοκλιματολογία στο Bjerknes Centre for Climate Research του Πανεπιστημίου του Bergen στη Νορβηγία, ενώ 2009 απέκτησε το Διδακτορικό (Ph.D.) του από το Αριστοτέλειο Πανεπιστήμιο Θεσσαλονίκης.

Από το 2006 εργάζεται ως εξωτερικός συνεργάτης στη εταιρία γεωλογικών, γεωφυσικών και περιβαλλοντικών μελετών GEOSERVICE LTD με την οποία εκτός από πληθώρα γεωτεχνικών και αρχαιολογικών μελετών έχει συμμετάσχει σε μεγάλα Ευρωπαϊκά ερευνητικά προγράμματα με αντικείμενο τις νέες μεθόδους και τεχνολογίες χρήσης των όμβριων και επεξεργασμένων υδάτων και του τεχνητού εμπλουτισμού των υδροφόρων στρωμάτων. Μεταξύ των ετών 2015 – 2017, και ως ανεξάρτητος ερευνητής σε συνεργασία με ερευνητές του Γαλλικού ερευνητικού ινστιτούτου CEREGE (Centre de Recherche et d’Enseignement de Géosciences de l’Environnement), έλαβε χρηματοδότηση από το Κοινωφελές Ίδρυμα Λάτση για την εκπόνηση μελέτης σχετικά με την ύπαρξη των παγετώνων στον Όλυμπο από την Νεολιθική εποχή μέχρι σήμερα.

Παράλληλα με τις ερευνητικές του δραστηριότητες, από το 2004 μέχρι και σήμερα διαχειρίζεται το ορεινό καταφύγιο Χρήστος Κάκκαλος στο Οροπέδιο των Μουσών του Ολύμπου, έχει πραγματοποιήσει πολυάριθμες αναβάσεις στα Ελληνικά βουνά, καθώς και στις κορυφές των Άλπεων, της Νορβηγίας της Ρωσίας και της Βόρειας Αμερικής, ενώ έχει συμμετάσχει σε 10 ορειβατικές αποστολές στα Ιμαλάια και τις Άνδεις. Το 2004 ήταν μέλος της πρώτης Ελληνικής αποστολής που επιτυχώς κατάφερε να ανέβει στο Έβερεστ.'
                    ]
                /* Create the object and return its id */
                ])->id
            ]),

            App\Schedule::updateOrCreate(['sid' => 'romy-lorenz'], [
                'hour' => '16:00',
                'visible' => false,
                'img_src' => '/images/speakers/romy-lorenz.jpg',
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
                'speaker_id' => App\Speaker::updateOrCreate(['sid' => 'romy-lorenz'], [
                    'name' => [
                        'en' => 'Romy Lorenz',
                        'el' => 'Romy Lorenz'
                    ],
                    'occupation' => [
                        'en' => 'Cognitive neuroscientist',
                        'el' => 'Γνωσιακή νευροεπιστήμονας'
                    ],
                    'visible' => false,
                    'img_src' => 'romy-lorenz-1.jpg',
                    'img_src_alt' => 'romy-lorenz-2.jpg',
                    'link' => 'http://www.romylorenz.com',
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
