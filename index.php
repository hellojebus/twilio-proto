<?php

require_once "vendor/autoload.php";

use Twilio\Rest\Client;


//set headers
header("content-type: text/xml");


$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$sid = getenv("TWILIO_SID");
$token = getenv("TWILIO_TOKEN");
$twilio = new Client($sid, $token);

$msg = $twilio->messages->create(getenv("MY_NUMBER"), [
  "body" => "te amo k thx bai",
  "from" => getenv("TWILIO_NUMBER"),
  "mediaUrl" => "https://cdn.shopify.com/s/files/1/1019/9659/products/Wong_lifeisbeautiful_webready_2048x2048.jpeg?v=1484689233"
]);

echo json_encode($msg);

?>