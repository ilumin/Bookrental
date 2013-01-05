<?php

session_start();

// Configuration
// ---------------------------------------
require 'config.php';


// Dummy data
// ---------------------------------------
require 'dummy.php';


// Auto load class
// ---------------------------------------


// Routing
// ---------------------------------------

// Check page request exist ?
$has_page = isset($_GET['page']) ? !empty($_GET['page']) : false;

// Define page param
$_page = !$has_page ? 'dashboard' : $_GET['page'];

// render header
require 'template/header.php';

switch ($_page) {
    case 'login':
        break;
    
    case 'dashboard':
        break;
    
    default:
        // error 404
        break;
}

// render footer
require 'template/footer.php';
