
//function that gets a specific parameer from the url
//usage getParameterByName('passcode');
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

//when page opens
 $(document).ready(function(){
            
    //set what happens when button is clicked        
    $("#target").click(function(){
      
        //get url paramenter passcode
        var pass=getParameterByName('passcode');
      
        //in case there IS a pass code
        if(pass!=null)
        {   
            //post a request to ring bell, postdingdong.php will check if passcode is correct
            $.post('tocarCampainha.php',{passcode:pass}, function(info){
               
                //returns what postdingdong echoed
                $("#result").html(info);
                
               
                      
        });
       } 
        else //if no pass code
            {
                //tel person to inset passcode
                $("#result").html("Precisas de um passcode");
                
                
            }
        
        $("#result").fadeIn().delay(1000).fadeOut();
    });
            
            
           
            
});