<?php
//USED TO INSERTO MORE PEOPLE ONTO THE DATABASE

  include 'db.php';   


$namer=utf8_encode("Jãoaoaooa");
        
        $sql ="INSERT INTO JuniUser  (name,passcode) VALUES ('Martim Reis','memkg');";
       //  $result = $connection->query($sql);
      

         $result = $connection->query($sql);


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