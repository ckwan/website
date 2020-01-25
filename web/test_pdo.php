<?php
var_dump(PDO::getAvailableDrivers());

$host 		= 'localhost';
$dbname 	= 'codeigniter';
$username 	= 'codeigniter';
$password 	= 'abc123';

$pdo_object = new PDO("mysql:host=localhost;dbname=calvinkwan", "root", "");

$query = $pdo_object->query('SELECT * FROM users');

var_dump($query->fetchAll(PDO::FETCH_ASSOC));