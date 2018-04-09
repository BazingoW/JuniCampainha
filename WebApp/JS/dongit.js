$(document).ready(function() {
        var x = document.getElementById("myAudio"); 
     setInterval(function(){ 
     
         
 
     
      $.post('checkCampainha.php',{}, function(info){
               
                //returns what postdingdong echoed
                //$("#result").html(info);
                console.log(info);
                //$("#result").fadeTo(500,1).delay(1000).fadeTo(500,0);
          
        
        
          
          if(info.indexOf('false')==-1)
              {
                  console.log("DONG");
                  
                 
                $("source").attr('src','Sounds/' + info + '.mp3');
                 
               
                  x.load();
                  x.play();
                  
                  $(".volthing").addClass("fa-volume-up").delay(2000).queue(function(){
                      
                      
                     $('.volthing').removeClass("fa-volume-up").dequeue();

});
                  
        
              }
              
                      
        });
     }, 500);

});


