<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "vendor/autoload.php";

use Twilio\Twiml;

$response = new Twiml;
$response->say("Hello World!");

header("content-type: text/xml");
echo $response;
