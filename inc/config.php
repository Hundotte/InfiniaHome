<?php
/**
 * Using PhpStorm.
 * (c) 2016 xiurobert
 * Created on 5/2/2016 at 7:29 PM
 */

$conf = Array();


// SMTP Configuration for contact me sender

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



// Recipients of email
// Use array syntax here

$conf['SMTP']['tosendto'] = Array(
    'some_user@example.com',
    'some_other@example.com'
);


// Subject of the Email

$conf['SMTP']['subject'] = 'Contact from: ';

// Body of the email
// Uses embed HTML

// Variables allowed:
// $name -> Name of the sender
// $email -> Email of the sender
// $message -> Sender's message

$conf['SMTP']['body'] = <<<SUB
<p>This is an enquiry from $name</p>
<p>Name: <b>$name</b></p>
<p>Email: <b>$email</b></p>
<p>Message: $message</p>
<p>
<i> This message is an automated message. Please do not reply to it</i>
</p>

SUB;

// Alternative body if HTML email cannot be sent

$conf['SMTP']['altbody'] = <<<BOD
Enquiry from $name\n
Name: $name\n
Email: $email\n
Message: $message\n
\n
\n
This is an automated message. Please do not reply


BOD;


