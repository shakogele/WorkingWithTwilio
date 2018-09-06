<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
$sid    = "AC401741676f7b342c12c39d435611e20c";
$token  = "befbb125528ee8ace8a14a07f0d92bc5";
$twilio = new Client($sid, $token);

$address = $twilio->addresses("AC401741676f7b342c12c39d435611e20c")
                  ->fetch();

print($address->customerName);
