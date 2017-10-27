<?php

    $str = file_get_contents('credentials.json');

    $json = json_decode($str, true);

//readable way of seeing json
//echo '<pre>' . print_r($json, true) . '</pre>';


  //sets variables
	$host=$json['database credentials']['host'];	// MySQL is hosted in this machine
	$user=$json['database credentials']['user'];	// <== replace istxxx by your IST identity
	$password=$json['database credentials']['password'];	// <== paste here the password assigned by mysql_reset
	$dbname = $user;	// Do nothing here, your database has the same name as your username.

    //sets connection
	$connection = new PDO("mysql:host=" . $host. ";dbname=" . $dbname, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
?>