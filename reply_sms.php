<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "vendor/autoload.php";
use Twilio\Twiml;
header("content-type: text/xml");
$response = new Twiml();
$response->message(
"I'm using the Twilio PHP library to respond to this SMS!"
);
echo $response;
