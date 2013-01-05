<?php

// Store Dummy Data
$data = false; // make sure it's empty

// Member
// -------------------------------
$data['member']['0'] = array(
    'id' => "0001",
    'firstname' => "jutamast",
    'lastname'  => "akkavasakul",
    'citizenid' => "1111111111",
    'gender'    => 1,
    'birthdate' => "1987-12-22",
    'phone'     => "0879953272",
    'registerdate' => "2012-01-03",
    'expiredate'   => "2013-01-03" 
);
$data['member']['1'] = array( 'id' => "0002", 'firstname' => "tai",'lastname' => "kung",'citizenid' =>"1111111111",'gender'=>1,'birthdate'=>"1987-12-22",'phone'=>"0879953272",'registerdate'=>"2012-01-03",'expiredate'=>"2013-01-03" );


// Register all data into session
$has_session = isset($_SESSION['data']);
if( $has_session==false ){
    $_SESSION['data'] = $data;
}
