<?php

session_start();
ob_start();

// Configuration
// ---------------------------------------
require 'config.php';


// Dummy data
// ---------------------------------------
require 'dummy.php';


// Auto load class
// ---------------------------------------
function __autoload($name) {
    require 'class/'.$name.'.php';
}

// Routing
// ---------------------------------------

// Check page request exist ?
$has_page = isset($_GET['page']) ? !empty($_GET['page']) : false;

// Check member status
$has_authen = isset($_SESSION['authen']);
$default_page = $has_authen ? 'dashboard' : 'login';

// Define page param
$_page = !$has_page ? $default_page : $_GET['page'];

// render header
require 'template/header.php';

switch ($_page) {
    // PAGE: dashboard
    case 'dashboard':
        // do nothing
        require 'template/dashboard.php';
        break;

    // PAGE: member
    case 'member':
        $member = new Member;
        $is_search = false;

        // search member
        if( isset($_GET['search']) ){
            $is_search = true;
            // $member_list = $member->findMember();
        }else{
            // $member_list = $member->memberList();
        }

        $member_list = $_SESSION['data']['member'];

        require 'template/member-list.php';
        break;

    // PAGE: member/add
    case 'member/add':
        require 'template/member-form.php';
        break;
    
    case 'login':
        if (!empty($_POST)) {
            // new Member instance here to login
            $member = new Member;
            if( $member->login($_POST['usename'], $_POST['password']) ){
                // redirect to dash board if success
                header("Location: ?page=dashboard");
                exit();
            }else{
                // set error message if can not login
                $_error = "Wrong username or password.";
            }
        }

        // render login form
        require 'template/page-login.php';
        break;
        
    default:
        // do nothing
        break;
}

// render footer
require 'template/footer.php';
