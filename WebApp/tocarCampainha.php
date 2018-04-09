<?php

     $host="db.ist.utl.pt";	// MySQL is hosted in this machine
	$user="ist181138";	// <== replace istxxx by your IST identity
	$password="uwww8243";	// <== paste here the password assigned by mysql_reset
	$dbname = $user;	// Do nothing here, your database has the same name 


//sets connection
	$connection = new PDO("mysql:host=" . $host. ";dbname=" . $dbname, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));


$sound  = $_REQUEST['s'];

echo($sound);


if($sound=='')
    $sound='true';

    //if there is result
         
         //return ding dong
         echo("true");
         
         //update variable
         $sql = "UPDATE TesteCampainha SET dingdong=:sound where id=1;";
 $result = $connection->prepare($sql);


$result->bindParam(':sound', $sound);
       
        $result->execute();

//turn connection off
    $connection = null;	




	
?>