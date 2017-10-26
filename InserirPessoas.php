<?php
//USED TO INSERTO MORE PEOPLE ONTO THE DATABASE

    //sets variables
    $host="db.ist.utl.pt";	// MySQL is hosted in this machine
	$user="ist181138";	// <== replace istxxx by your IST identity
	$password="isuj4225";	// <== paste here the password assigned by mysql_reset
	$dbname = $user;	// Do nothing here, your database has the same name as your username.
    
    //set connection
	$connection = new PDO("mysql:host=" . $host. ";dbname=" . $dbname, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    
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