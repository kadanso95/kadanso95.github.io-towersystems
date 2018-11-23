<?php

$server = '127.0.0.1';
$username = 'root';
$password = '';
$hash = password_hash($password, PASSWORD_DEFAULT);
$database = 'tower_reg';

try{
	$conn = new PDO("mysql:host=$server; dbname=$database;", $username, $password);
} catch (PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}

?>
