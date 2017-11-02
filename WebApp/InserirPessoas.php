<?php
//USED TO INSERTO MORE PEOPLE ONTO THE DATABASE

  include 'db.php';   


 if(isset($_GET["user"]) && isset($_GET["pass"]))
    {
  
     
        
        $sql ="INSERT INTO JuniUser  (name,passcode) VALUES ('".$_GET["user"] ."','".$_GET["pass"] ."');";
       //  $result = $connection->query($sql);
      

         $result = $connection->prepare($sql);
         $result->execute();
 }

		$sql = "select * from JuniUser;";

	echo("<p>Query: " . $sql . "</p>\n");

	$result = $connection->query($sql);
	
	$num = $result->rowCount();

	echo("<p>$num records retrieved:</p>\n");

	echo("<table border=\"1\">\n");
	echo("<tr><td>Nome</td><td>Data</td></tr>\n");
	foreach($result as $row)
	{
		echo("<tr><td>");
		echo($row["name"]);
		echo("</td><td>");
		echo($row["passcode"]);
		echo("</td></tr>\n");
	}
	echo("</table>\n");
?>