<?php

// Application information
// =======================
$config['app']['baseUrl'] = 'http://bookrent.localhost/';
$config['app']['title']   = 'Book Rental System';


// Application navigator
// =====================
$config['app']['nav'] = array(
    'Home' => 'dashboard',
    'Rent' => 'rent',
    'Return' => 'return',
    'Book manage' => array(
        'target' => 'return',
        'child' => array(
            'View all books' => 'view-all-book'
            'Add new books' => 'add-new-book'
        ),
    ''
);