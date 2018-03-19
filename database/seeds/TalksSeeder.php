<?php

use Illuminate\Database\Seeder;

class TalksSeeder extends Seeder {
    /**
     * @return void
     */
    public function run() {

        $talks = [
            App\Schedule::updateOrCreate(['sid' => 'styllas'], [
                'hour' => '12:05',
                'visible' => false,
                'img_src' => '/images/speakers/styllas-1.jpg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'Michael Styllas',
                    'el' => 'Μιχάλης Στύλλας'
                ],
                'event_prev' => [
                    'en' => 'Understanding Chaos from Poseidon to Zeus to Hades',
                    'el' => 'Understanding Chaos from Poseidon to Zeus to Hades'
                ],
                'subtitle' => [
                    'en' => '
Michael Styllas has a PhD in Geology and a Master degree in Oceanography-Marine Geology. He spends most of his time in the alpine refuge “Christos Kakkalos” on Mount Olympus. He has climbed extensively on the mountains of Greece, as well as on the highest peaks of the world. He was a member of the first successful Greek expedition that stood on the summit of Mount Everest.

On the stage of TEDxNTUA he will talk about how a geologist, as well as a worldwide known climber, understands chaos.
',
                    'el' => '
Ο Μιχάλης Στύλλας είναι διδάκτωρ Γεωλογίας με μεταπτυχιακό στην Ωκεανογραφία. Τους περισσότερους μήνες του χρόνου ζει στον Όλυμπο, ως υπεύθυνος του καταφυγίου «Χρήστος Κάκκαλος» πραγματοποιώντας συχνά ταξίδια σε ψηλά βουνά σε όλο τον κόσμο. Το 2004 ήταν μέλος της πρώτης επιτυχημένης ελληνικής αποστολής που ανέβηκε στην ψηλότερη κορυφή του κόσμου, στο Έβερεστ.

Στη σκηνή του TEDxNTUA θα μας μιλήσει για το πώς αντιλαμβάνεται το chaos ένας ερευνητής γεωλόγος, αλλά και ένας διεθνώς καταξιωμένος ορειβάτης.
'
                ],
                'speaker_id' => App\Speaker::where('sid', 'styllas')->first()->id
            ]),

            App\Schedule::updateOrCreate(['sid' => 'romy-lorenz'], [
                'hour' => '16:10',
                'visible' => false,
                'img_src' => '/images/speakers/romy-lorenz-1.jpg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'Romy Lorenz',
                    'el' => 'Romy Lorenz'
                ],
                'event_prev' => [
                    'en' => 'Understanding the human mind without a human mind: The AI neuroscientist',
                    'el' => 'Understanding the human mind without a human mind: The AI neuroscientist'
                ],
                'subtitle' => [
                    'en' => '
Romy Lorenz is a Postdoctoral Researcher at Imperial College with studies on psychology and biomedical engineering. She is a cognitive neuroscientist focusing on developing brain-computer interfaces. Alongside her research, she is working as a co-director for AXNS, a curatorial collective interested in the intersection between neuroscience and art.
 
 On the stage of TEDxNTUA she will talk about how her research led her to the development of the “AI neuroscientist” that exceeds the chaos of human factor and can lead to safe scientific results.
',
                    'el' => '
Η Romy Lorenz είναι μεταδιδακτορική ερευνήτρια στο Ιmperial College, με αντικείμενο μελέτης τη γνωσιακή νευροεπιστήμη. Με σπουδές πάνω στην ψυχολογία και τη βιοϊατρική μηχανική, ασχολείται με τη διασύνδεση εγκεφάλου-υπολογιστή. Παράλληλα, είναι συνδιευθύντρια στο σύλλογο AXNS, που έχει ως στόχο τo συνδυασμό τέχνης και επιστήμης.
 
Στη σκηνή του TEDxNTUA θα μας μιλήσει για το πώς η έρευνά της την οδήγησε στην ανάπτυξη του “έξυπνου νευροεπιστήμονα” που  υπερβαίνει το chaos του ανθρώπινου παράγοντα και οδηγείται σε ασφαλή επιστημονικά αποτελέσματα.
'
                ],
                'speaker_id' => App\Speaker::where('sid', 'romy-lorenz')->first()->id
            ]),

            App\Schedule::updateOrCreate(['sid' => 'themis-sapsis'], [
                'hour' => '13:05',
                'visible' => false,
                'img_src' => '/images/speakers/themis-sapsis-1.jpg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'Themis Sapsis',
                    'el' => 'Θέμης Σαψής'
                ],
                'event_prev' => [
                    'en' => 'Chaos: The favorable source of uncertainty',
                    'el' => 'Chaos: The favorable source of uncertainty'
                ],
                'subtitle' => [
                    'en' => '
Themis Sapsis is an Associate Professor at the Department of Mechanical Engineering of MIT. He has created an innovative algorithm that helps to predict extreme event phenomena through chaotic equations. 

On the stage of TEDxNTUA he will talk about the scientific definition of chaos and how chaos predominates in nature.
',
                    'el' => '
Ο Θέμης Σαψής είναι Αναπληρωτής Καθηγητής στο τμήμα Μηχανολόγων Μηχανικών του MIT. Έχει κατασκευάσει έναν καινοτόμο αλγόριθμο που βοηθά στην πρόβλεψη ακραίων καιρικών φαινομένων μέσω χαοτικών εξισώσεων.

Στη σκηνή του TEDxNTUA θα μας μιλήσει για τον επιστημονικό ορισμό του χάους, αλλά και πώς αυτό κυριαρχεί στη φύση.
'
                ],
                'speaker_id' => App\Speaker::where('sid', 'themis-sapsis')->first()->id
            ]),

            App\Schedule::updateOrCreate(['sid' => 'caroline-bos'], [
                'hour' => '18:30',
                'visible' => false,
                'img_src' => '/images/speakers/caroline-bos-1.jpg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'Caroline Bos',
                    'el' => 'Caroline Bos'
                ],
                'event_prev' => [
                    'en' => 'Future-proofing the City in the Age of Data Technology',
                    'el' => 'Future-proofing the City in the Age of Data Technology'
                ],
                'subtitle' => [
                    'en' => '
Caroline Bos is a co-founder of the UNStudio (United Net) architecture office and has studied History of Art in London and Urban and Regional Planning in Utrecht.

On the stage of TEDxNTUA she will talk about smart cities and how architecture tries to tame the Chaos of the produced data, putting people as a priority.
',
                    'el' => '
Η Caroline Bos είναι συνιδρύτρια του αρχιτεκτονικού γραφείου UNStudio και έχει σπουδές στην Ιστορία της Τέχνης στο Λονδίνου και στον Αστικό & Περιφερειακό Σχεδιασμό στην Ουτρέχτη.

Στη σκηνή του TEDxNTUA θα μας μιλήσει για τις smart cities και το πώς η αρχιτεκτονική προσπαθεί να δαμάσει το chaos της παραγόμενης πληροφορίας, θέτοντας ως προτεραιότητα τον άνθρωπο.
'
                ],
                'speaker_id' => App\Speaker::where('sid', 'caroline-bos')->first()->id
            ]),

            App\Schedule::updateOrCreate(['sid' => 'ioanna-theodorou'], [
                'hour' => '12:45',
                'visible' => false,
                'img_src' => '/images/speakers/ioanna-theodorou-1.jpg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'Ioanna Theodorou',
                    'el' => 'Ιωάννα Θεοδώρου'
                ],
                'event_prev' => [
                    'en' => 'What is a startupper doing in the refugee crisis?',
                    'el' => 'What is a startupper doing in the refugee crisis?'
                ],
                'subtitle' => [
                    'en' => '
Ioanna uses the startup mentality to reimagine how social impact can be achieved. She launched Campfire Innovation, she has lived across Europe and the Middle East and holds degrees in History of Art and a MA in International Cultural Policy & Management.

On the stage of TEDxNTUA2018 she will talk about the chaos of the refugee crisis and how its solution requires the development of innovative methods combined with the use of technology.
',
                    'el' => '
Η Ιωάννα Θεοδώρου είναι κοινωνική επιχειρηματίας που γεφυρώνει τη λογική των startups με την κοινωνική προσφορά. Έχει δημιουργήσει το Campfire Innovation, ενώ έχει ζήσει στην Ευρώπη και τη Μέση Ανατολή και κατέχει Bachelor στην Ιστορία Τέχνης και Μάστερ στη Διοίκηση Πολιτιστικών ΜΚΟ.

Στη σκηνή του TEDxNTUA θα μας μιλήσει για το chaos του προσφυγικού ζητήματος, αλλά και το πώς η αντιμετώπισή του επιβάλλει την ανάπτυξη καινοτόμων μεθόδων σε συνδυασμό με τη χρήση της τεχνολογίας.
'
                ],
                'speaker_id' => App\Speaker::where('sid', 'ioanna-theodorou')->first()->id
            ]),

            App\Schedule::updateOrCreate(['sid' => 'vassilios-makios'], [
                'hour' => '19:10',
                'visible' => false,
                'img_src' => '/images/speakers/vassilios-makios-1.jpg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'Vassilios Makios',
                    'el' => 'Βασίλειος Μακιός'
                ],
                'event_prev' => [
                    'en' => 'Open Innovation',
                    'el' => 'Open Innovation'
                ],
                'subtitle' => [
                    'en' => '
Vassilios Makios is General Director at Corallia and Professor Emeritus in the Electrical Engineering Department of  the University of Patras. His vision is “to sustain a Greek environment with the right framework conditions to allow sciences, innovation and entrepreneurship to flourish again”. 
 
On the stage of TEDxNTUA he will introduce us to the term of open innovation. Only communities with open structures will allow small actions to produce great results, revealing the butterfly effect and the creative chaos.
',
                    'el' => '
Ο Βασίλειος Μακιός είναι γενικός Διευθυντής του Corallia και ομότιμος καθηγητής του τμήματος Ηλεκτρολόγων Μηχανικών και Τεχνολογίας Υπολογιστών του Πανεπιστημίου Πατρών. Όραμά του είναι να δημιουργήσει στην Ελλάδα ένα περιβάλλον το οποίο θα επιτρέπει στις επιστήμες, την καινοτομία και την επιχειρηματικότητα να ανθίσουν. 

Στη σκηνή του TEDxNTUA θα μας εισάγει στην έννοια του open innovation. Μόνο οι κοινότητες με ανοιχτές δομές επιτρέπουν σε μικρές δράσεις να επιφέρουν μεγάλα αποτελέσματα, αποκαλύπτοντας έτσι το φαινόμενο της πεταλούδας και το δημιουργικό chaos.
'
                ],
                'speaker_id' => App\Speaker::where('sid', 'vassilios-makios')->first()->id
            ]),

            App\Schedule::updateOrCreate(['sid' => 'aimilios-chalamandaris'], [
                'hour' => '15:30',
                'visible' => false,
                'img_src' => '/images/speakers/aimilios-chalamandaris-1.jpg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'Aimilios Chalamandaris',
                    'el' => 'Αιμίλιος Χαλαμανδάρης'
                ],
                'event_prev' => [
                    'en' => 'Start up in Chaos',
                    'el' => 'Start up in Chaos'
                ],
                'subtitle' => [
                    'en' => '
Aimilios Chalamandaris is a co-founder and CEO of Innoetics. He has authored more than 30 original scientific papers, and is one of the founding members of the team, which developed one of the world\'s leading synthetic speech technologies.

On the stage of TEDxNTUA he will talk about how someone, based in Greece, can overcome the so-called chaos of the Greek system and stand out internationally.
',
                    'el' => '
Ο Αιμίλιος Χαλαμανδάρης είναι συνιδρυτής και CEO της εταιρίας Innoetics. Έχει συγγράψει περισσότερες από 30 πρωτότυπες επιστημονικές εργασίες, ενώ αποτελεί ένα από τα ιδρυτικά μέλη της ομάδας που ανέπτυξε μια από τις κορυφαίες τεχνολογίες συνθετικής ομιλίας στον κόσμο.

Στη σκηνή του TEDxNTUA θα μας μιλήσει για το πώς μπορεί κανείς να ξεπεράσει το αποκαλούμενο chaos του ελληνικού συστήματος και να ξεχωρίσει διεθνώς, έχοντας ως βάση την Ελλάδα.
'
                ],
                'speaker_id' => App\Speaker::where('sid', 'aimilios-chalamandaris')->first()->id
            ]),

            App\Schedule::updateOrCreate(['sid' => 'dionysis-zindros'], [
                'hour' => '15:50',
                'visible' => false,
                'img_src' => '/images/speakers/dionysis-zindros-1.jpg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'Dionysis Zindros',
                    'el' => 'Διονύσης Ζήνδρος'
                ],
                'event_prev' => [
                    'en' => 'Autonomous Decentralized Chaos',
                    'el' => 'Autonomous Decentralized Chaos'
                ],
                'subtitle' => [
                    'en' => '
Dionysis Zindros is a PhD student in cryptography and blockchains at the University of Athens. He is a security and software engineer by training and in the past has been a member of Google and Twitter.

On the stage of TEDxNTUA, he will talk about how a decentralized society can be built. Is that possible or will it lead to the total chaos?
',
                    'el' => '
Ο Διονύσης Ζήνδρος είναι υποψήφιος διδάκτορας στο Πανεπιστήμιο Αθηνών στην κρυπτογραφία και τις τεχνολογίες blockchain. Ως μηχανικός λογισμικού και ειδικός στην ασφάλεια έχει εργαστεί, μεταξύ άλλων, στη Google και στο Twitter.

Στη σκηνή του TEDxNTUA θα μας μιλήσει για το πώς μπορεί να δομηθεί μια “αποκεντρωμένη” κοινωνία. Είναι αυτό εφικτό ή θα οδηγήσει στο απόλυτο chaos;
'
                ],
                'speaker_id' => App\Speaker::where('sid', 'dionysis-zindros')->first()->id
            ]),

            App\Schedule::updateOrCreate(['sid' => 'vassilis-charalabidis'], [
                'hour' => '18:50',
                'visible' => false,
                'img_src' => '/images/speakers/charalabidis-1.jpg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'Vassilis Charalabidis',
                    'el' => 'Βασίλειος Χαραλαμπίδης'
                ],
                'event_prev' => [
                    'en' => 'Athens, Metropolis by Accident',
                    'el' => 'Athens, Metropolis by Accident'
                ],
                'subtitle' => [
                    'en' => '
Vassilis Haralambidis is a founding member, manager and artistic director of the BIOS non-profit organization (Bios pireos84, Romantso and Latraac). He has devoted himself to pioneering a creative based approach to new and social entrepreneurship, with his main focus currently being social inclusion and regeneration through the creative and cultural industries sector.

On the stage of TEDxNTUA he will talk about the chaos of Athens.
',
                    'el' => '
Ο Βασίλης Χαραλαμπίδης είναι ιδρυτικό μέλος, μάνατζερ και καλλιτεχνικός διευθυντής του μη κερδοσκοπικού οργανισμού BIOS. Έχει αφοσιωθεί στη δημιουργία μιας πρωτοποριακής προσέγγισης για τη νέα κοινωνική επιχειρηματικότητα με επίκεντρο την κοινωνική ένταξη και αναγέννηση στον τομέα των δημιουργικών και πολιτιστικών βιομηχανιών.

Στη σκηνή του TEDxNTUA θα μας δώσει τη δική του, ιδιαίτερη εκδοχή για το chaos της Αθήνας. 
'
                ],
                'speaker_id' => App\Speaker::where('sid', 'vassilis-charalabidis')->first()->id
            ]),


            App\Schedule::updateOrCreate(['sid' => 'lc-architects'], [
                'hour' => '12:25',
                'visible' => false,
                'img_src' => '/images/speakers/lc-1.jpg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'LC Architects',
                    'el' => 'LC Architects'
                ],
                'event_prev' => [
                    'en' => 'Architecture in the Age of Intelligence',
                    'el' => 'Architecture in the Age of Intelligence'
                ],
                'subtitle' => [
                    'en' => '
Natassa Lianou and Ermis Chalvatzis are directors of Lianou Chalvatzis Architects (LC-A). The practice\'s work focuses οn commercial building projects aiming to bring meaningful design to the everyday lives of a broader audience.

On the stage of TEDxNTUA they will talk about how the parametric design is inseparably linked to chaos.
',
                    'el' => '
Η Νατάσσα Λιανού και ο Ερμής Χαλβατζής διευθύνουν το αρχιτεκτονικό γραφείο Lianou Chalvatzis Architects (LC-A). Σχεδιάζουν αποτελεσματικές αρχιτεκτονικές λύσεις σε υπαρκτά προβλήματα με στόχο να συνδέσουν τους ανθρώπους και να προωθήσουν την κοινωνική αλληλεπίδραση.

Στη σκηνή του TEDxNTUA θα μας μιλήσουν για το πώς ο παραμετρικός σχεδιασμός είναι άρρηκτα συνδεδεμένος με το chaos.
'
                ],
                'speaker_id' => App\Speaker::where('sid', 'lc-architects')->first()->id
            ]),

            App\Schedule::updateOrCreate(['sid' => 'galani'], [
                'hour' => '16:30',
                'visible' => false,
                'img_src' => '/images/speakers/galani-1.jpg',
                'type' => 'talk',
                'event_title' => [
                    'en' => 'Dimitra Galani',
                    'el' => 'Δήμητρα Γαλάνη'
                ],
                'event_prev' => [
                    'en' => 'Talking over Chaos with an Αrtist',
                    'el' => 'Talking over Chaos with an Αrtist'
                ],
                'subtitle' => [
                    'en' => '
The stage of TEDxNTUA welcomes Dimitra Galani. A conversation with her will reveal how an artist perceives the chaos of the artistic creation through the chaos of universe and human existence.

Dimitra Galani is an exceptional artist, a serious and dignified presence in our country’s music scene. Her enduring cross-generational appeal is based on her unique voice, inherent musicality and powerful stage presence.
',
                    'el' => '
Η σκηνή του TEDxNTUA υποδέχεται τη Δήμητρα Γαλάνη. Μία συν-ομιλία μαζί της θα μας φανερώσει πώς μία καλλιτέχνις αντιλαμβάνεται το chaos της καλλιτεχνικής δημιουργίας μέσα από το χάος του σύμπαντος και της ανθρώπινης ύπαρξης.

Η Δήμητρα Γαλάνη αποτελεί μια ξεχωριστή παρουσία στην εξέλιξη του σύγχρονου μουσικού μας πολιτισμού τις τελευταίες δεκαετίες τόσο ερμηνευτικά όσο και δημιουργικά. Είναι μία καλλιτέχνις που ξέρει πως να μαγεύει με την ιδιαιτερότητα και την ομορφιά της φωνής της αλλά και με τις ποικίλες εκφράσεις της δημιουργικότητάς της.
'
                ],
                'speaker_id' => App\Speaker::where('sid', 'galani')->first()->id
            ]),
        ];

    }

}