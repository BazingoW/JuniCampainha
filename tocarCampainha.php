<?php

     include 'db.php';

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