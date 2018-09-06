<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC401741676f7b342c12c39d435611e20c';
$auth_token = 'befbb125528ee8ace8a14a07f0d92bc5';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+15742030912";

$client = new Client($account_sid, $auth_token);

try{
  $client->messages->create(
    // Where to send a text message (your cell phone?)
    '+995558529062',
    array(
        'from' => $twilio_number,
        'body' => 'I sent this message in under 10 minutes!'
    )
);
} catch(Exception $e){
  echo "Error: ".$e->getMessage();
}
