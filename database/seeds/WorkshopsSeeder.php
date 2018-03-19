<?php

use Illuminate\Database\Seeder;

class WorkshopsSeeder extends Seeder {
    /**
     * @return void
     */
    public function run() {

        $workshops = [
            App\Schedule::updateOrCreate(['sid' => 'spin'], [
                'hour' => '12:15',
                'visible' => false,
                'img_src' => '/images/schedule/spin.jpg',
                'type' => 'workshop',
                'event_title' => [
                    'en' => 'SPIN - Space Innovation',
                    'el' => 'SPIN - Space Innovation'
                ],
                'event_prev' => [
                    'en' => 'Music through the lens of engineering (12:15-14:45)',
                    'el' => 'Η μουσική μέσα από τον φακό του μηχανικού (12:15-14:45)'
                ],
                'subtitle' => [
                    'en' => '
SPIN - Space Innovation is an effort of young people with  common vision to contribute to the development of space. Their aim is to research and develop new technologies related to space, missile and robotics, as well as to create educational actions to enhance the skills of young people. One of the most important actions of SPIN is the Space CanSat contest in Greece.

At TEDxNTUA, they will introduce us to the magical world of programming and arduino and they will show us how with simple materials and a lot of imagination we can build our own musical instrument. And if you think that to play music we have to have physical contact with the instrument, think again…
',
                    'el' => '
Η SPIN - Space Innovation αποτελεί μια προσπάθεια νέων ανθρώπων με κοινό τους όραμα τη συνεισφορά στην ανάπτυξη του τομέα του διαστήματος. Στόχος των ανθρώπων της SPIN είναι η έρευνα και η ανάπτυξη νέων τεχνολογιών σχετικών με τη διαστημική, την πυραυλική και τη ρομποτική καθώς και η δημιουργία δράσεων εκπαιδευτικού χαρακτήρα για την ενίσχυση των δεξιοτήτων των νέων. Μία από τις σημαντικότερες δράσεις της SPIN είναι ο πανελλήνιος διαγωνισμός διαστημικής CanSat in Greece.

Στο TEDxNTUA, θα μας εισάγουν στο μαγικό κόσμο του προγραμματισμού και των arduino και θα μας δείξουν πώς με απλά υλικά και πολλή φαντασία μπορούμε να κατασκευάσουμε το δικό μας μουσικό όργανο. Κι αν νομίζετε ότι για να παίξει μουσική πρέπει να το αγγίξουμε μάλλον κάνετε λάθος…
'
                ],
            ]),

/*
            App\Schedule::updateOrCreate(['sid' => 'humane'], [
                'hour' => '14:30',
                'visible' => false,
                'img_src' => '/images/schedule/humane.jpg',
                'type' => 'workshop',
                'event_title' => [
                    'en' => 'Breath Box',
                    'el' => 'Breath Box'
                ],
                'event_prev' => [
                    'en' => 'Innovating breathing chamber (Simulcast room 14:30-14:45)',
                    'el' => 'Καινοτόμος θάλαμος αναπνοής (Αίθουσα Simulcast 14:30-14:45)'
                ],
                'subtitle' => [
                    'en' => '
Breath Box: an innovating breathing chamber that transforms the therapy routine to a pleasant everyday activity. Design meets care and brings to your door, a center of cardiopulmonary rehabilitation.
',
                    'el' => '
Breath Box: ένας καινοτόμος θάλαμος αναπνοής που μετατρέπει την ρουτίνα της θεραπείας, σε μια ευχάριστη καθημερινή δραστηριότητα. Το design συναντά την φροντίδα και φέρνει στην πόρτα σου, ένα κέντρο αναπνευστικής αποκατάστασης.
'
                ],
            ]),
*/

            App\Schedule::updateOrCreate(['sid' => 'labyrinth'], [
                'hour' => '10:30',
                'visible' => false,
                'img_src' => '/images/schedule/labyrinth.jpg',
                'type' => 'workshop',
                'event_title' => [
                    'en' => 'Labyrinth of Senses',
                    'el' => 'Labyrinth of Senses'
                ],
                'event_prev' => [
                    'en' => 'Experiential lab of familiarization with disabilities (10:30-20:00)',
                    'el' => 'Βιωματικό εργαστήριο εξοικείωσης με την αναπηρία (10:30-20:00)'
                ],
                'subtitle' => [
                    'en' => '
 Labyrinth of Senses is an experiential laboratory of familiarization with disabilities. Its aim is to provide the participants a different perception for the world around them. The laboratory is composed by different stations, where the participants are called to face a different challenge without using one of their senses. In its 3 years of action, Labyrinth of Senses has realized 24 actions and has reached over 3.000 people.
',
                    'el' => '
Το Labyrinth of Senses είναι ένα βιωματικό εργαστήριο εξοικείωσης με την αναπηρία που έχει ως στόχο να παρέχει στους συμμετέχοντες μια διαφορετική αντίληψη για τον κόσμο γύρω τους. Το εργαστήριο αποτελείται από διαφορετικούς σταθμούς, σε καθέναν από τους οποίους οι συμμετέχοντες καλούνται να αντιμετωπίσουν μια διαφορετική πρόκληση χωρίς να χρησιμοποιούν κάποια από τις αισθήσεις τους. Στα 3 χρόνια δράσης του το Labyrinth of Senses έχει πραγματοποιήσει 24 δράσεις και έχει επηρεάσει πάνω από 3000 άτομα.
'
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'librespace'], [
                'hour' => '11:30',
                'visible' => false,
                'img_src' => '/images/schedule/librespace.jpg',
                'type' => 'workshop',
                'event_title' => [
                    'en' => 'Libre Space Foundation',
                    'el' => 'Libre Space Foundation'
                ],
                'event_prev' => [
                    'en' => 'Chasing satellites (11:30-)',
                    'el' => 'Κυνηγώντας δορυφόρους (11:30-)'
                ],
                'subtitle' => [
                    'en' => '
Libre Space Foundation is a nonprofit organization aiming to develop free and open space technologies. An interactive satellite communication workshop for getting to know more about artificial satellites, their tracks, their basic functions and observation techniques will take place at the Side Events of #TEDxNTUA2018. Participants will construct receiving antennas and record signals from artificial satellites. In addition, there will be a presentation to global satellite communication network, the SatNOGS, as well as the Libre Space Foundation\'s open and free space technologies.
',
                    'el' => '
Ένα διαδραστικό εργαστήριο δορυφορικών επικοινωνιών για γνωριμία με τους τεχνητούς δορυφόρους, τις τροχιές τους, τις βασικές λειτουργίες τους και τις τεχνικές παρατήρησης. Οι συμμετέχοντες θα κατασκευάσουν κεραίες λήψης και θα καταγράψουν σήματα από τεχνητούς δορυφόρους. Επίσης, θα γίνει παρουσίαση του παγκόσμιου δικτύου δορυφορικών επικοινωνιών SatNOGS, καθώς και του ευρύτερου έργου της Libre Space Foundation σε ανοιχτές και ελεύθερες διαστημικές τεχνολογίες. Το Libre Space Foundation είναι ένας μη κερδοσκοπικός οργανισμός, με στόχο την ανάπτυξη ελεύθερων και ανοιχτών τεχνολογιών για το διάστημα.
'
                ],
            ]),

/*
            App\Schedule::updateOrCreate(['sid' => 'igem'], [
                'hour' => '14:15',
                'visible' => false,
                'img_src' => '/images/schedule/igem.jpg',
                'type' => 'workshop',
                'event_title' => [
                    'en' => 'IGEM',
                    'el' => 'IGEM'
                ],
                'event_prev' => [
                    'en' => 'Synthetic Biology team from AUTH and DUTH students (14:15-14:30)',
                    'el' => 'Ομάδα συνθετικής βιολογίας από φοιτητές του ΑΠΘ και του ΔΠΘ (14:15-14:30)'
                ],
                'subtitle' => [
                    'en' => '
For the first time in 2017, students of Aristotle University of Thessaloniki and Democritus University of Thrace created a student interdisciplinary team of synthetic biology and took part in the competition iGEM (international Genetically Engineered Machine). The project involved the battle against colorectal cancer mostly with the creation of PANDORRA, a platform for genetic networks for information processing.
',
                    'el' => '
Για πρώτη φορά το 2017, δημιουργήθηκε με πρωτοβουλία φοιτητών του ΑΠΘ και του ΔΠΘ, φοιτητική διεπιστημονική ομάδα συνθετικής βιολογίας που πήρε μέρος στο διαγωνισμό iGEM (international genetically engineered machine). Το πρότζεκτ τους αφορούσε τη μάχη απέναντι στον καρκίνο του παχέος εντέρου κυρίως μέσω της δημιουργίας του PANDORRA, μιας πλατφόρμας για κατασκευή λογικών γενετικών κυκλωμάτων για information processing.
'
                ],
            ]),
*/
        ];

    }

}