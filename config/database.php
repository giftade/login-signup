<?php

$username = 'segun';
$host = 'localhost';
$dbname = 'signup_login';
$password = '123456';

try{
  $pdo = new PDO("mysql:hostname=$host;dbname=$dbname", "$username", "$password" );
  $output =  'Connection Successful!!';
}catch(PDOException $e){
  $output =  "unable to connect to database : " .  $e->getMessage();
}

?>