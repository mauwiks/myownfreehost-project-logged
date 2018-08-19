<?php

/* Check if core was accessed directly */
if(!isset($include_core)){
    header("HTTP/1.0 403 Forbidden"); 
    die("403 Forbidden.");
}

/* 

    PROJECT LOGGED LANGUAGE FILE
    LANGUAGE : ENGLISH (EN)
    TRANSLATED BY : PlanetCloud

*/

$lang = array(

    # General/Static Message
    'Create New Account' => 'Create New Account',
    'Login' => 'Login',
    'Signup' => 'Signup',
    'Terms of Service' => 'Terms of Service',
    'Privacy Policy' => 'Privacy Policy',
    'Sign up for a free account' => 'Sign up for a free account',
    'Login to your account' => 'Login to your account',
    'Email Address' => 'Email Address',
    'Password' => 'Password',
    'Confirm Password' => 'Confirm Password',
    "I've read and agree to the" => "I've read and agree to the",
    'terms of service' => 'terms of service',
    'SIGN UP' => 'SIGN UP',
    'Already have a membership' => 'Already have a membership',
    'your-name' => 'your-name',
    'Enter Captcha' => 'Enter Captcha',
    'Client Area' => 'Client Area',

    # Error & Dynamic Messages
    'Choosen subdomain is too long! 16 characthers maximum.' => 'Choosen subdomain is too long! 16 characthers maximum.',
    'Choosen subdomain is too short! 4 characthers minimum.' => 'Choosen subdomain is too short! 4 characthers minimum.',
    'Please enter a valid domain name' => 'Please enter a valid domain name',
    'Please enter a valid email.' => 'Please enter a valid email.',
    'Password is too long! 25 characthers maximum.' => 'Password is too long! 25 characthers maximum.',
    'Password does not match.' => 'Password does not match.',
    'Captcha cannot be empty.' => 'Captcha cannot be empty.',
    'You must agree to the terms of service!' => 'You must agree to the terms of service!',

    // Sentence : Contragulations! {DOMAIN} is available!
        'Contragulations!' => 'Contragulations!',
        'is available!' => 'is available!',

    // Sentence : Unfortunely {DOMAIN} has been taken.
        'Unfortunely' => 'Unfortunely',
        'has been taken.' => 'has been taken.', 

    // Sentence : Password is too short! {MINIMUM PASSWORD} characther minimum
        'Password is too short!' => 'Password is too short!',
        'characthers minimum.' => 'characthers minimum.',


    
);

?>