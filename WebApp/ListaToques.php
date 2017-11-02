<!-- IST MySQL Connection Test -- 2015.09.19 -->

<html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
         <link rel="stylesheet" type="text/css" href="CSS/styles.css">
         <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    </head>
<body style ='background-color: #00ACE2;'>
    

    
   
    
<?php

	  include 'db.php';
	
  

	$sql = "select name, time from timedingdongs natural join JuniUser order by time desc;";

$result = $connection->prepare($sql);
$result->execute();

	
	
	$num = $result->rowCount();



	echo("<table class='centeit'>\n");
	echo("<tr><th>Nome</th><th>Data</th></tr>\n");
	foreach($result as $row)
	{
		echo("<tr><td>");
		echo($row["name"]);
		echo("</td><td>");
		echo($row["time"]);
		echo("</td></tr>\n");
	}
	echo("</table>\n");
		
        $connection = null;
	
	

?>
    
</body>
</html>
