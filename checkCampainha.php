<?php
    include 'db.php';

    //simple query
	$sql = "SELECT * FROM TesteCampainha;";

	//make query
	$result = $connection->prepare($sql);
    $result->execute();

	
	//get first row
    $row = $result->fetch();

    //echo according to variable
    if($row["dingdong"]==1)
            echo "true";
        else
            echo "false";

    //set button off again
    $sql = "UPDATE TesteCampainha SET dingdong=false where id=1;";
	$result = $connection->prepare($sql);
    $result->execute();
    
    //turn connection off
    $connection = null;	
?>

