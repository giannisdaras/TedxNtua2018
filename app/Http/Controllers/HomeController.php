<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {
    	$navlinks = array(
    		'home' => array(
    			'url' => url('/'),
    			'title' => 'Home',
    			'active' => true
    		),
    		'partners' => array(
    			'url' => url('/partners'),
    			'title' => 'Partners',
    			'active' => false
    		),
    		'speakers' => array(
    			'url' => url('/#speakers'),
    			'title' => 'Speakers',
    			'active' => false
    		),
    		'schedule' => array(
    			'url' => url('/schedule'),
    			'title' => 'Schedule',
    			'active' => false
    		),
    		'team' => array(
    			'url' => url('/team'),
    			'title' => 'Team',
    			'active' => false
    		),
    		'about' => array(
    			'url' => url('/about'),
    			'title' => 'About',
    			'active' => false
    		),
    		'contact' => array(
    			'url' => url('/contact'),
    			'title' => 'Contact',
    			'active' => false
    		),
    		'get_tickets' => array(
    			'url' => 'https://www.eventora.com',
    			'title' => 'Get Tickets',
    			'active' => false
    		),
    	);
        return view('home')->with('navlinks', $navlinks);
    }
}
