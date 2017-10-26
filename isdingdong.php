<?php

	$host="db.ist.utl.pt";	// MySQL is hosted in this machine
	$user="ist181138";	// <== replace istxxx by your IST identity
	$password="isuj4225";	// <== paste here the password assigned by mysql_reset
	$dbname = $user;	// Do nothing here, your database has the same name as your username.

 
	$connection = new PDO("mysql:host=" . $host. ";dbname=" . $dbname, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));



	$sql = "SELECT * FROM TesteCampainha;";

	

	$result = $connection->query($sql);
	
	$num = $result->rowCount();

	//echo("<p>$num records retrieved:</p>\n");
    
	foreach($result as $row)
	{
	
		//echo($row["id"]);
        //echo($row["dingdong"]);	
		if($row["dingdong"]==1)
            echo "true";
        else
            echo "false";
			
		
	}
	


		
       $connection = null;
	

?>

