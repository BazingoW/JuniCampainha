<?php
    //sets variables
    $host="db.ist.utl.pt";	// MySQL is hosted in this machine
	$user="ist181138";	// <== replace istxxx by your IST identity
	$password="isuj4225";	// <== paste here the password assigned by mysql_reset
	$dbname = $user;	// Do nothing here, your database has the same name as your username.
    
    //set connection
	$connection = new PDO("mysql:host=" . $host. ";dbname=" . $dbname, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    

    //if there is a post parameter
    if(isset($_POST["passcode"]))
    {
        //set query check if this passcode is valid
        $sql="SELECT * FROM JuniUser WHERE JuniUser.passcode='".$_POST["passcode"] ."';";
        
        //get result
        $result = $connection->query($sql);
        
        //get row count
        $count = $result->rowCount();
    
     if($count==1) 
    {
         //if there is result
         
         //return ding dong
         echo("Ding Dong!");
         
         //update variable
         $sql = "UPDATE TesteCampainha SET dingdong=true where id=1;";
         $result = $connection->query($sql);
         
         //insert new entry
         $sql ="INSERT INTO timedingdongs  (passcode) VALUES ('".$_POST["passcode"]."');";
         $result = $connection->query($sql);

    }
else
    //if no passcode was found
    echo("passcode inválido");
   

}else
    
{
    
  echo("Necessitas de um passcode");
   
}





	
?>