<?php
$host="db.ist.utl.pt";	// MySQL is hosted in this machine
	$user="ist181138";	// <== replace istxxx by your IST identity
	$password="isuj4225";	// <== paste here the password assigned by mysql_reset
	$dbname = $user;	// Do nothing here, your database has the same name as your username.
 
	$connection = new PDO("mysql:host=" . $host. ";dbname=" . $dbname, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    
if(isset($_POST["passcode"]))
{
    
    
    
    $sql="SELECT * FROM JuniUser WHERE JuniUser.passcode='".$_POST["passcode"] ."';";
    
	$result = $connection->query($sql);
    $count = $result->rowCount();
    
     if($count==1)
    {
         echo("Ding Dong!\n");
        $sql = "UPDATE TesteCampainha SET dingdong=true where id=1;";
        $result = $connection->query($sql);
         
         
         $sql ="INSERT INTO timedingdongs  (passcode) VALUES ('".$_POST["passcode"]."');";
        $result = $connection->query($sql);

    }
else
 echo("passcode inválido");
   

}else
    
{
    
   /*$sql="SELECT * FROM JuniUser WHERE JuniUser.passcode='drop2';";
    echo("Ding Dong</p>\n");
	$result = $connection->query($sql);
    $count = $result->rowCount();
    echo($count);*/
   
}





	
?>