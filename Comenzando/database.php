<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'database';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

function format_uri( $string, $separator = '-' )
{
$accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|Grave|lig|orn|ring|slash|th|tilde|uml);~i';
$special_cases = array( '&' => 'and', "'" => '');
$string = mb_strtolower( trim( $string ), 'UTF-8' );
$string = str_replace( array_keys($special_cases), array_values( $special_cases), $string );
$string = preg_replace( $accents_regex, '$1', htmlentities( $string, ENT_QUOTES, 'UTF-8' ) );
$string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
$string = preg_replace("/[$separator]+/u", "$separator", $string);
return $string;
}
?>