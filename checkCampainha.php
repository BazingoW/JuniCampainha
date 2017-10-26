<?php
    //sets variables
	$host="db.ist.utl.pt";	// MySQL is hosted in this machine
	$user="ist181138";	// <== replace istxxx by your IST identity
	$password="isuj4225";	// <== paste here the password assigned by mysql_reset
	$dbname = $user;	// Do nothing here, your database has the same name as your username.

    //sets connection
	$connection = new PDO("mysql:host=" . $host. ";dbname=" . $dbname, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    //simple query
	$sql = "SELECT * FROM TesteCampainha;";

	//make query
	$result = $connection->query($sql);
	
	//get first row
    $row = $result->fetch();

    //echo according to variable
    if($row["dingdong"]==1)
            echo "true";
        else
            echo "false";

    //set button off again
    $sql = "UPDATE TesteCampainha SET dingdong=false where id=1;";
	$result = $connection->query($sql);
    
    //turn connection off
    $connection = null;	
?>

