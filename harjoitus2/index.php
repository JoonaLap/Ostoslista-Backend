<?php
print header("Access-Control-Allow-Origin: *");
print header("Content-Type: application/json");
$data = array('message' => 'Hello from PHP with JSON');
$json = json_encode($data,JSON_PRETTY_PRINT);
print $json;
