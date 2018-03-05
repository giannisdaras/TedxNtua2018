<?php

return [

	/*
		    |--------------------------------------------------------------------------
		    | Pagination Language Lines
		    |--------------------------------------------------------------------------
		    |
		    | The following language lines are used by the paginator library to build
		    | the simple pagination links. You are free to change them to anything
		    | you want to customize your views to better match your application.
		    |
	*/

	'language' => 'English',

	'loading' => 'Loading...',

	/* NAV */
	'nav' => [
		'home' => 'Home',
		'sponsors' => 'Sponsors',
		'speakers' => 'Speakers',
		'schedule' => 'Schedule',
		'team' => 'Team',
		'blog' => 'Blog',
		'about' => 'About',
		'contact' => 'Contact',
		'gettickets' => 'Get Tickets',
	],

	/* FOOTER */
	'footer' => [
		'facebook_title' => 'Facebook stream',
		'instagram_title' => 'Instagram stream',
		'past_events_title' => 'Past events',
		'youtube_title' => 'Videos from past events on YouTube',
		'handcrafted' => 'Handcrafted with',
		'license' => 'This independently organized TEDx event is operated under license from TED.',
	],

	/* HOME */
	'home' => [
		'title' => 'Home',
		'description' => 'TEDxNTUA 2018 is taking place this year on Saturday, 24 March at the Athens Planetarium. The theme of the event is Chaos. Join us in this seemingly random journey, full of intriguing scientific talks, engaging performances and educative workshops.',
		'hero' => [
			'date' => 'March 24, 2018',
			'venue' => 'Athens Planetarium',
			'address' => '387 Andrea Syggrou Av.',
			'tickets' => 'Get tickets now!',
		],
		'sections' => [
			'chaos' => [
				'title' => '_what is ',
				'desc' => '
				<p class="text-justify">
				The notion of Chaos today is synonym to confusion and disorder. In the past though, ancient Greek Philosophers, thought highly of Chaos and considered it fundamental to the creation of Cosmos, that is, the Universe. Chaos was the original matter that transformed the "abnormal" uniformity of nature into "normal" diversity.
				</p>

				<p class="text-justify">
				We witness Chaos in its scientific meaning in numerous situations in everyday life: smoke rising up smoothly into the air and suddenly vanishing, unexpected traffic in a Highway road, irregular leaking of a tap, inexplicable fluctuations of the Stock Market Index and many more instances explained mostly by this Theory of Chaos.
				</p>

				<p class="text-justify">
				Chaos resides in our daily routine. No matter how hard we fight for harmony and well-being in our life, we frequently face hardships and difficulties that break the order.
				</p>

				<p class="text-justify">
				This year&#39;s <a href="https://2018.tedxntua.com">TEDx NTUA</a> makes an attempt to apply the Theory of Chaos to our individual quest for orderly life.
				</p>
				',
				'calltoaction' => 'Who are we?',
			],
			'sessions' => [
				[
					'title' => 'Session 1: Initial Conditions',
				],
				[
					'title' => 'Session 2: Observation',
				],
				[
					'title' => 'Session 3: Creating Order'
				],
			],
			'schedule' => [
				'title' => 'Schedule',
				'desc' => 'The very essence of a TEDx event is its medley of <strong>talks</strong>, <strong>performances</strong> and <strong>workshops</strong>. Discover the topics that will be explored and join us in a journey of Chaos.',
				'calltoaction' => 'See the full schedule',
			],
			'speakers' => [
				'title' => '_speakers',
				'desc' => 'People that are scientists, professionals, artists. Individuals with <strong>passion</strong> for what they do and equipped with <strong>ideas</strong> worth spreading. These are our leading figures. Get to know them before the event and discover their work thus far.',
				'calltoaction' => 'See all the speakers',
			],
			'auspices' => [
				'title' => '_under the auspices of NTUA',
				'desc' => 'Under the auspices of',
			],
			'blog' => [
				'title' => '_blog',
				'desc' => 'Organizing a TEDx event requires the coordination of many people and many teams. Here we post our progress and the best moments from our meetings.',
				'calltoaction' => 'See all our posts',
			],
			'sponsors' => [
				'title' => '_sponsors',
				'desc' => 'Our event would not have been possible without the support from organizations that share our <strong>values</strong> and <strong>visions</strong>. Visit their websites and learn more about them. Of course, the most important supporter is our <strong>university</strong> itself.',
				'calltoaction' => 'See all our sponsors',
			],
			'map' => [
				'title' => '_map & venue',
				'desc' => 'TEDxNTUA 2018 will take place at the Athens Planetarium. The Planetarium is located at 387 Syggrou Avenue, just under 7 minutes on foot from the nearest bus station. Access via public transport: <ul><li>550, B2 (<a href="http://telematics.oasa.gr/en/#stationInfo_240009_%CE%A9%CE%9D%CE%91%CE%A3%CE%95%CE%99%CE%9F_37.9423944,23.6978659" target="_blank">ONASEIO</a> stop)</li><li>A2 (<a href="http://telematics.oasa.gr/en/#stationInfo_380002_%CE%99%CE%91%CE%A3%CE%A9%CE%9D%CE%9F%CE%A3_37.9399224,23.700599" target="_blank">IASONOS</a> stop)</li></ul>',
			],
		],
	],

	/* SPONSORS */
	'sponsors' => [
		'title' => 'Sponsors',
		'description' => 'Our event would not have been possible without the support from organizations that share our values and visions. Visit their websites and learn more about them.',
		'rank' => ['Grand Sponsors', 'Grand Carrier Sponsor|Grand Carrier Sponsors', 'Partners', 'Supporters', 'Media Partners'],
	],

	/* SPEAKERS */
	'speakers' => [
		'title' => 'Speakers',
		'description' => 'People that are scientists, professionals, artists. Individuals with passion for what they do and equipped with ideas worth spreading. These are our leading figures. Get to know them before the event and discover their work thus far.',
		'back' => 'Back to Speakers',
		'bio' => 'Bio',
		'talk' => 'Talk',
		'previous' => 'Previous TEDx NTUA Talks',
		'nospeakers' => 'Don\'t get lost in the Chaos. The speakers will be announced soon.<br>Check out our <strong>social media</strong> to stay tuned!',
	],

	/* SCHEDULE */
	'schedule' => [
		'title' => 'Schedule',
		'description' => 'The very essence of a TEDx event is its medley of talks, performances and workshops. Discover the topics that will be explored and join us in a journey of Chaos.',
		'time' => 'Time',
		'talks' => 'Talks',
		'performances' => 'Performances',
		'workshops' => 'Workshops',
		'notalks' => 'Don\'t get lost in the Chaos. The talks will be announced soon.<br>Check out our <strong>social media</strong> to stay tuned!',
		'noperformances' => 'Don\'t get lost in the Chaos. The performances will be announced soon.<br>Check out our <strong>social media</strong> to stay tuned!',
		'noworkshops' => 'Don\'t get lost in the Chaos. The workshops will be announced soon.<br>Check out our <strong>social media</strong> to stay tuned!',
		'noschedule' => 'Don\'t get lost in the Chaos. The schedule will be announced soon.<br>Check out our <strong>social media</strong> to stay tuned!',
	],

	/* TEAM */
	'team' => [
		'title' => 'Team',
		'description' => 'Meet the chaotic components of this otherwise orderly project. TEDxNTUA is an organized effort by NTUA students to create and sustain the necessary frame for the exchange of new ideas in the fields of technology and business administration.',
		'experience' => 'Experience Team',
		'experience_description' => 'The Experience Team is responsible for ensuring the best experience possible to the event attendees by organizing special events, workshops and many more!',
		'fr' => 'Fundraising Team',
		'fr_description' => 'The Fundraising Team is responsible for finding Partners and Sponsors that fund this TEDx Event. Without them, there would be no TEDx NTUA!',
		'graphics' => 'Graphics Team',
		'graphics_description' => 'The Graphics Team designs booklets, logos and supports other teams (like IT and Fundraising Team) with graphical material.',
		'it' => 'IT Team',
		'it_description' => 'The IT Team is responsible for the creation of this website as well as providing technical support for the event.',
		'media' => 'Media Team',
		'media_description' => 'The Media Team manages the social media accounts of the event like Facebook, Instagram and Twitter.',
		'speakers' => 'Speakers Team',
		'speakers_description' => 'The Speakers Team is held responsible for inviting the most awesome speakers!',
		'venue_production' => 'Venue & Production Team',
		'venue_production_description' => 'The Venue & Production Team is responsible for the venue in which the event will take place, as well as things like live-streaming, videos etc.',
		'quote' => 'The chaotic components of this otherwise orderly project',
		'volunteer' => 'Become a volunteer',
		'thanks' => 'We would like to express our gratitude to professor Theodora Varvarigou and Mrs. Augusta Lambropoulou for their contribution in curating the event.',
	],

	/* BLOG */
	'blog' => [
		'title' => 'Blog',
		'description' => '',
		'read_more' => 'Read More',
		'read_less' => 'Read Less',
		'back' => 'Back to blog',
	],

	/* ABOUT */
	'about' => [
		'title' => 'About',
		'description' => 'Who are we? What is TED? What is TEDx? Get to know the institutions involved in this effort and the history behind the team of TEDxNTUA.',
		'tedx' => [
			'title' => 'What is TEDx?',
			'subtitle' => 'x = independently organized event',
			'content' => '<p class="text-justify">In the spirit of ideas worth spreading, TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. At a TEDx event, TED Talks video and live speakers combine to spark deep discussion and connection. These local, self-organized events are branded TEDx, where x = independently organized TED event. The TED Conference provides general guidance for the TEDx program, but individual TEDx events are self-organized. (Subject to certain rules and regulations.)</p>',
		],
		'ted' => [
			'title' => 'What is TED?',
			'content' => '<p class="text-justify">
                        TED is a nonprofit organization devoted to Ideas Worth Spreading. Started as a four-day conference in California 30 years ago, TED has grown to support its mission with multiple initiatives. The two annual TED Conferences invite the world\'s leading thinkers and doers to speak for 18 minutes or less. Many of these talks are then made available, free, at TED.com. TED speakers have included Bill Gates, Jane Goodall, Elizabeth Gilbert, Sir Richard Branson, Nandan Nilekani, Philippe Starck, Ngozi Okonjo-Iweala, Sal Khan and Daniel Kahneman.
                    </p>
                    <p class="text-justify">
                        The annual TED Conference takes place each spring in Vancouver, British Columbia. TED\'s media initiatives include TED.com, where new TED Talks are posted daily; the Open Translation Project, which provides subtitles and interactive transcripts as well as translations from volunteers worldwide; the educational initiative TED-Ed. TED has established the annual TED Prize, where exceptional individuals with a wish to change the world get help translating their wishes into action; TEDx, which supports individuals or groups in hosting local, self- organized TED-style events around the world, and the TED Fellows program, helping world-changing innovators from around the globe to amplify the impact of their remarkable projects and activities.<br>

                        Follow TED on Twitter at <a href="http://twitter.com/TEDTalks">http://twitter.com/TEDTalks</a>, or on Facebook at <a href="http://www.facebook.com/TED">http://www.facebook.com/TED</a>.
                    </p>',
		],
		'tedxntua' => [
			'title' => 'What is TEDxNTUA?',
			'content' => '<p class="text-justify">
                        The various activities of the students and the academic community in general in the National Technical University of Athens are proof of creativity endemic. This scientific potential is the fundamental material for the creation of progressive ideas, which are capable of following the current advancements in science and technology.
                    </p>
                    <p class="text-justify">
                        Nonetheless, the massive immigration of young graduates towards the flourishing economies of the world, the appearance of numerous new fields, the need for highly specialized scientists and employees, the general sense of individualism and especially the pervasive economical and ethical crisis have deprived the academic community of the collaborative spirit necessary in every learning experience.
                    </p>
                    <p class="text-justify">
                        TEDxNTUA is an organized effort to create and sustain the necessary frame for the exchange of new ideas in the fields of technology and business administration. At the same time, NTUA’s community is becoming a living, extrovert organism focusing on the scientific and career goals of its members, while promoting the expansion of the network of collaboration between the NTUA, the industries and the startup community.
                    </p>',
		],
	],

	/* CONTACT */
	'contact' => [
		'title' => 'Contact',
		'description' => 'Want to reach out? Use our contact form or send us an e-mail at info@tedxntua.com! We will get back to you as soon as possible.',
		'contactus' => 'Contact Us',
		'greeting' => 'Please find below our contact info or just fill in the form and we’ll get back to you as soon as possible!',
		'form' => [
			'name' => 'Name',
			'name_ph' => 'Enter your Name',
			'name_help' => 'Your name is required',
			'email' => 'e-mail address',
			'email_ph' => 'Enter email',
			'email_help' => 'Your email is required',
			'subject' => 'Subject',
			'subject_ph' => 'Enter message subject',
			'subject_help' => 'Please enter an appropriate subject',
			'message' => 'Message',
			'submit' => 'Send',
		],
		'msg' => [
			'success' => 'Your e-mail was sent successfully! We\'ll get back to you shortly.',
			'failure' => 'Your e-mail could not be sent through the form. Please try e-mailing us on info@tedxntua.com :)',
		],
		'return' => 'Return to the form',
	],

	/* PRIVACY */
	'privacy' => [
		'title' => 'Privacy Policy',
		'description' => 'Learn how our website uses a few of your browsing data to improve your experience and provide you with useful functionalities.',
	],

	'cookies' => [
		'description' => 'We use cookies to ensure you get the best experience. <a href="/privacy">Learn more</a>.',
		'accept' => 'Accept',
	],

	'recaptcha' => [
		'failed' => 'The reCAPTCHA check failed.'
	],

	'tickets' => [
		'title' => 'Tickets',
		/* maybe translate to English??? */
		'desc' => 'Η ομάδα του TEDxNTUA επιστρέφει για μια ακόμη χρονιά πιο δυναμική από ποτέ, με όρεξη και νέες ιδέες! Το φετινό μας θέμα είναι το Chaos. Κάνε κράτηση εισιτηρίων τώρα!',
	],

];
