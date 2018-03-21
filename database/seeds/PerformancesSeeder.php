<?php

use Illuminate\Database\Seeder;

class PerformancesSeeder extends Seeder {
    /**
     * @return void
     */
    public function run() {

        $performances = [
            App\Schedule::updateOrCreate(['sid' => 'percussions'], [
                'hour' => '15:00',
                'visible' => false,
                'img_src' => '/images/schedule/percussions.png',
                'type' => 'performance',
                'event_title' => [
                    'en' => 'NTUA Percussion Team',
                    'el' => 'Ομάδα Κρουστών ΕΜΠ'
                ],
                'event_prev' => [
                    'en' => 'They will present to us one of their unique compositions (Main stage 15:00-15:15)',
                    'el' => 'Θα μας παρουσιάσουν μία από τις μοναδικές συνθέσεις τους (Κύρια σκηνή 15:00-15:15)'
                ],
                'subtitle' => [
                    'en' => '
This group was created in 2002 through the Percussion Seminars organized by the Theatrical Department of NTUA in collaboration with Vasilis Vasilatos.

In their performances, the group presents **original compositions** with a variety of different instruments, which lead them to a dynamic and highly personal style. This **unique** character of the team has made them a recognizable and popular group. They’ve also participated at several events of NTUA and festivals allover Greece.
',
                    'el' => '
Η ομάδα αυτή δημιουργήθηκε το 2002 μέσα από τα Σεμινάρια Κρουστών που διοργάνωσε το Θεατρικό Τμήμα του Ε.Μ.Π. σε συνεργασία με τον Βασίλη Βασιλάτο.

Η ομάδα στις συναυλίες της παρουσιάζει ένα **πρωτότυπο υλικό** από οργανωμένες συνθέσεις για κρουστά, με πλήθος διαφορετικών οργάνων, διαμορφώνοντας έτσι ένα δυναμικό και ιδιαίτερα προσωπικό ύφος. Ο **ιδιαίτερος** αυτός χαρακτήρας της, την ανέδειξε σαν μία αναγνωρίσιμη και δημοφιλή ομάδα κρουστών, με αποτέλεσμα τη συμμετοχή της σε σειρά εκδηλώσεων του Ε.Μ.Π., όπως και σε γνωστά φεστιβάλ της Ελληνικής μουσικής σκηνής.
'
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'toubanaki'], [
                'hour' => '18:00',
                'visible' => false,
                'img_src' => '/images/schedule/toubanaki.jpg',
                'type' => 'performance',
                'event_title' => [
                    'en' => 'Aggeliki Toubanaki',
                    'el' => 'Αγγελική Τουμπανάκη'
                ],
                'event_prev' => [
                    'en' => 'Performer, molecular biologist, sound experimentalist, vocal educator and much more (Main stage 18:00-18:15)',
                    'el' => 'Performer, μοριακή βιολόγος, ηχητική πειραματίστρια, φωνητική εκπαιδεύτρια και πολλά άλλα (Κύρια σκηνή 18:00-18:15)'
                ],
                'subtitle' => [
                    'en' => '
Her creation field is a broad and multi-layered universe within which she expresses herself using different forms and contexts, such as improvisation, dance and theater.

Having completed a long standing cycle of scientific research, Aggeliki has a PhD at the Medical School of the University of Athens in Molecular Biology and in Music Studies. She is now dedicated exclusively to singing and music. Aggeliki strongly believes that voice is an extraordinary musical instrument. She conceptually and experientially detects the possibilities of human voice through personal improvisations paths and crosswords of different musical motifs. Since 2005 she has been professionally involved in music, as a creator, producer and lead vocalist of different music projects (Folk, World Jazz and Nu Jazz), which she presents regularly in Greece and abroad. Her basis is jazz music, whilst her interest has so far been the collection and study of traditional rhythms, scales and extended vocal sounds with international and geographical coordinates adjacent to Greece.

Aggeliki has been teaching "Vocal Technique" and "Jazz Improvisation" at Philippos Nakas Conservatory, "Voice Coaching" for performers and actors and organizes and leads "Vocal circles", as she has been taught by Bobby McFerrin and his Team (New York 2015).

Her need, joy and goal are the creative interaction, experimentation and free communication of people without Musical boundaries.
',
                    'el' => '
Η προσέγγισή της είναι σε ανοιχτή συνομιλία με τις παραστατικές/οπτικοακουστικές τέχνες και την εικαστική δημιουργία και η δουλειά της βασίζεται στην έρευνα και την ελευθερία της δημιουργικής έκφρασης έξω από νόρμες και κοινές πρακτικές.

Έχοντας ολοκληρώσει έναν πολυετή κύκλο επιστημονικής έρευνας, η Αγγελική είναι αριστούχος διδάκτορας της Ιατρικής Σχολής του Πανεπιστημίου Αθηνών στη Μοριακή Βιολογία και των Μουσικών Σπουδών. Επέλεξε ανάμεσα στα δύο το πεδίο της τέχνης και έχει αφιερωθεί πλέον αποκλειστικά στο τραγούδι και τη μουσική. Από το 2005 δημιουργεί μουσικά projects με World Jazz, Nu Jazz μουσική θεματολογία («Toubanaki & the Buzz Bastardz», «Drums Voice Jazztronica duet», «Jazz Plus», «Oulaloum», «Συνδέσεις»), τα οποία παρουσιάζει στην Ελλάδα και στο εξωτερικό.

Η Αγγελική διδάσκει «Τεχνική της φωνής» και «Αυτοσχεδιασμό» στο Ωδείο Φ. Νάκας, φωνητική προετοιμασία για performers και ηθοποιούς με βάση την μέθοδο «MUSA» (Musical System of Acting) του σκηνοθέτη/acting coach Σωτήρη Καραμεσίνη και διοργανώνει «Φωνητικούς Κύκλους» (Circle Singing), όπως διδάχτηκε από τον Bobby McFerrin, τη Rhiannon και τον Bob Stollof στην Νέα Υόρκη.

Η ανάγκη της, η χαρά της και ο στόχος της είναι η διάδραση, ο πειραματισμός και η ελεύθερη επικοινωνία χωρίς μουσικά σύνορα.
'
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'science-reactors'], [
                'hour' => '17:40',
                'visible' => false,
                'img_src' => '/images/schedule/science-reactors.png',
                'type' => 'performance',
                'event_title' => [
                    'en' => 'Science Reactors',
                    'el' => 'Science Reactors'
                ],
                'event_prev' => [
                    'en' => 'Stand-up comedy based on scientific subjects (Simulcast room 17:40-18:00)',
                    'el' => 'Stand-up κωμωδία βασισμένη σε επιστημονικά ζητήματα (Αίθουσα Simulcast 17:40-18:00)'
                ],
                'subtitle' => [
                    'en' => '
A team of young scientists with talent in science communication was created over five years ago. Their aim is to **communicate science** in a fun way so as to attract the interest and love of young people. Scientists step out of the laboratories and on to the stage, turning difficult scientific issues into **comprehensible and humorous stories**.

So let\'s decode the Chaos of science.
',
                    'el' => '
Μία ομάδα από νεαρούς επιστήμονες με ταλέντο στην **επικοινωνία της επιστήμης**, δημιουργήθηκε πριν πέντε χρόνια. Στόχος τους είναι να βγει η γνώση από τα στεγανά της πλαίσια και με τρόπο διασκεδαστικό να προσελκύσει το ενδιαφέρον και την αγάπη των νέων (και όχι μόνο) για την επιστήμη. Οι επιστήμονες βγαίνουν από το εργαστήριο και ανεβαίνουν στη σκηνή μετατρέποντας δύσκολα επιστημονικά θέματα σε **κατανοητές ιστορίες** και κυρίως, σε ιστορίες γεμάτες χιούμορ!

Ας αποκωδικοποιήσουμε λοιπόν το chaos της επιστήμης.
',
                ],
            ]),
        ];

    }

}