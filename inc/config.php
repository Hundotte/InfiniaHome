<?php
/**
 * Using PhpStorm.
 * (c) 2016 xiurobert
 * Created on 5/2/2016 at 7:29 PM
 */



//
$conf = Array();






// Do not change anything before this line

// ONLY CHANGE IF YOU HAVE EDITED YOUR CONFIG
/********************************************************
 * WARNING WARNING WARNING WARNING
 *
 * ******************************************************
 * I am not responsible if you change this and your config is completely untouched.
 * If this section was changed and the rest of the script crashes your server it
 * is ALL YOUR FAULT. This product comes WITHOUT WARRANTY and NO, we will NOT fix your
 * server for you. (Just do a system wipe on the /var/www/)
 *
 * ******************************************************
 *
 */
// Change to true if your config has been edited
$conf['edited'] = false;




/**
 * ---------------------------------------------------------
 * SMTP / Email Sending configuration
 * ---------------------------------------------------------
 *
 * The details for the SMTP config can be found in your web host's control panel
 *
 * cPanel: Email Accounts > some_email@example.com > configure mail client > read the SMTP information
 */

// The SMTP host. Your web host will provide this


$conf['SMTP']['host'] = 'changeme';


// The SMTP username. Usually the email address
$conf['SMTP']['username'] = 'changeme';

// The SMTP password. Self-explanatory. Your email address password
$conf['SMTP']['password'] = 'changeme';


// The SMTP port. Defaults to 25.
$conf['SMTP']['port'] = 25;

// Security level for SMTP. Allowed: TLS, SSL, None
// [Code]
// TLS: 'tls'
// SSL: 'ssl'
// None: false

// Default is none
// If it is none, the username and password will be ignored
$conf['SMTP']['secure'] = false;

// Subject of the Email

$conf['SMTP']['subject'] = 'Confirm your account < InfiniaPress';

// Body of the email

/**
 * These email bodies are ran through a template parser. Here are the supported variables:
 * 
 * {#user_name} => Resolves to the username entered
 * {#user_email} => Resolves to the user's email entered in the signup form
 * {#user_id} => Resolves to the user's id generated
 * {#user_code} => Resolves to the confirmation code generated by the system
 * {#user_fullname} => Resolves to the full name entered by the user
 *
 *
 * Note that these variables are supported in both the body and the alt body
 */

$conf['SMTP']['body'] = <<<SUB
EDIT THIS PLZ
SUB;

// Alternative body if HTML email cannot be sent

$conf['SMTP']['altbody'] = <<<BOD
EDIT THIS PLZ

BOD;


/**
 * Extra stuff configuration
 * TODO: Make a table for configuration in the database. Yay!
 */


$conf['dev-email'] = "support@yourinfinia.org";




/**
 *
 * ---------------------------------------------------------
 * Database configuration
 * ---------------------------------------------------------
 *
 * This section is used to configure the login/signup database.
 */


// Database host
$conf['db']['host'] = "host.somedbhost.com";


// Database server port. usually 3306. Leave this if you don't know
$conf['db']['port'] = 3306;

// Name of your database. This database SHOULD ALREADY BE CREATED
$conf['db']['name'] = "changeme";

// username to access database

$conf['db']['username'] = "changeme";


// Password to access database

$conf['db']['password'] = "changeme";






