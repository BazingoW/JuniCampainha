<?php
         $host="db.ist.utl.pt";	// MySQL is hosted in this machine
	$user="ist181138";	// <== replace istxxx by your IST identity
	$password="uwww8243";	// <== paste here the password assigned by mysql_reset
	$dbname = $user;	// Do nothing here, your database has the same name 


//sets connection
	$connection = new PDO("mysql:host=" . $host. ";dbname=" . $dbname, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));



    //simple query
	$sql = "SELECT * FROM TesteCampainha;";

	//make query
	$result = $connection->prepare($sql);
    $result->execute();

	
	//get first row
    $row = $result->fetch();

    //echo according to variable
    if($row["dingdong"]===NULL)
            echo "false";
        else
            echo($row["dingdong"]);

    //set button off again
    $sql = "UPDATE TesteCampainha SET dingdong=NULL where id=1;";
	$result = $connection->prepare($sql);
    $result->execute();
    
    //turn connection off
    $connection = null;	
?>

