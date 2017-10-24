
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>JuniCampainha</title>
        <style>
.btn-huge{
    padding:20px 50px;
   font-size: 20px;
font-family: 'Roboto', sans-serif;
    
}
            button{
  margin-top:25%;
                
  display:block;

                

}
 .answer {
   padding-top: 10%;
  display:block;
text-align: center;
     color: white;
     font-family: 'Roboto', sans-serif;
     font-size: 20px;
}
             
.wrapper {
    text-align: center;
}
            
</style>
        
    </head>
<body style ='background-color: #00ACE2;'>
    

  
<div class="wrapper">
    <button type="button" class="btn btn-default btn-huge" id="target" >Juni Campainha</button>
</div>


 <span id="result" class="answer" style="display:none">Ding Dong!</span>
 
    <script>
   
  
        $(document).ready(function(){
            
            
    $("#target").click(function(){
      
        
        $.post("postdingdong.php",null, function(info){
        
             $("#result").fadeIn().delay(1000).fadeOut();
        });
    });
});
    </script>
    
  
</body>

</html>

