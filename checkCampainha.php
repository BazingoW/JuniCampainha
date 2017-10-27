<?php
    include 'footer.php';

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

