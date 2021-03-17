<?php
print header ("Access-Control-Allow-Origin: *");
print header ("Content-Type: application/json");
$data = array(
    array('firstname' => 'Joona', 'lastname' => 'Lappalainen', 'email' => 'joonalappalainen@outlook.com'),
    array('firstname' => 'Oona', 'lastname' => 'Tiikkainen', 'email' => 'oonatiikkainen@outlook.com'),
    array('firstname' => 'Eeli', 'lastname' => 'Mikkonen', 'email' => 'eelimikkonen@outlook.com'),
    array('firstname' => 'Antti', 'lastname' => 'Vaisanen', 'email' => 'anttivaisanen@outlook.com'),
    array('firstname' => 'Geralt', 'lastname' => 'Rivialainen', 'email' => 'geraltrivialainen@outlook.com')
);
$json = json_encode($data,JSON_PRETTY_PRINT);
print $json;