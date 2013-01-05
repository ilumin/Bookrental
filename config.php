<?php

// Application information
// =======================
$config['app']['baseUrl'] = 'http://bookrent.localhost/';
$config['app']['title']   = 'Book Rental System';


// Application navigator
// =====================
$config['app']['navigator'] = array(
    // 'dashboard' => array(
    //     'label' => 'Home',
    //     'url'   => '?page=dashboard'
    // ),
    'rent' => array(
        'label' => 'Rent',
        'url'   => '?page=rent'
    ),
    'return' => array(
        'label' => 'Return',
        'url'   => '?page=return'
    ),
    'reserve' => array(
        'label' => 'Reserve',
        'url'   => '?page=reserve'
    ),
    'store' => array(
        'label' => 'Store',
        'url'   => '?page=store'
    ),
    'member' => array(
        'label' => 'Member',
        'url'   => '?page=member'
    ),
);