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
                'visible' => true,
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
                'visible' => true,
                'img_src' => '/images/schedule/toubanaki.jpg',
                'type' => 'performance',
                'event_title' => [
                    'en' => 'Aggeliki Toubanaki',
                    'el' => 'Αγγελική Τουμπανάκη'
                ],
                'event_prev' => [
                    'en' => 'Performer, molecular biologist, sound experimentalist, vocal educator et al. (Main stage 18:00-18:20)',
                    'el' => 'Performer, μοριακή βιολόγος, ηχητική πειραματίστρια, φωνητική εκπαιδεύτρια κ.ά. (Κύρια σκηνή 18:00-18:20)'
                ],
                'subtitle' => [
                    'en' => ' 
The stage of TEDxNTUA welcomes Aggeliki Toubanaki, a unique performer.

Her creation field is a broad and multi-layered universe within which, she expresses herself using different forms and contexts, such as improvisation, dance and theater.

Since 2005 she has been professionally involved in music, as a creator, producer and lead vocalist of different music projects (Folk, **World Jazz** and **Nu Jazz**), which she presents regularly in Greece and abroad.

She has a PhD at the Medical School of the University of Athens in **Molecular Biology**.

Her website: [aggelikitoubanaki.com](http://aggelikitoubanaki.com)
',
                    'el' => '
Η σκηνή του TEDxNTUA 2018 υποδέχεται μια ξεχωριστή performer, την Αγγελική Τουμπανάκη.

Η Αγγελική χρησιμοποιεί τη φωνή της σαν μουσικό όργανο ανιχνεύοντας εννοιολογικά και βιωματικά τις δυνατότητες της ανθρώπινης φωνής μέσα από προσωπικές αυτοσχεδιαστικές διαδρομές και διασταυρώσεις μουσικών ιδιωμάτων.

Από το 2005, δημιουργεί μουσικά projects με **World Jazz**, **Nu Jazz** μουσική θεματολογία, τα οποία παρουσιάζει στην Ελλάδα και στο εξωτερικό. Είναι καθηγήτρια φωνητικής, έχοντας μαθητεύσει κοντά στον Bobby McFerrin, τη Rhiannon και τον Bob Stollof στην Νέα Υόρκη.

Είναι αριστούχος διδάκτορας της Ιατρικής Σχολής του Πανεπιστημίου Αθηνών στη **Μοριακή Βιολογία**.

Η ιστοσελίδα της: [aggelikitoubanaki.com](http://aggelikitoubanaki.com)
'
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'science-reactors'], [
                'hour' => '17:40',
                'visible' => true,
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