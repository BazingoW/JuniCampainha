

var geoError = function(error) {
    console.log('Error occurred. Error code: ' + error.code);

    // notify(error.code);
    // error.code can be:
    //   0: unknown error
    //   1: permission denied
    //   2: position unavailable (error response from location provider)
    //   3: timed out

    if(error.code==2)
    {
        notify("O GPS ainda está a ligar-se");
    }
    else if(  error.code==1){
        notify("Liga o GPS e/ou dá permissões de localização");
    }
};


var sound = getUrlParameter('sound');
var d=2;
var geoOptions = {
    timeout: 2 * 1000
}

//when page opens
$(document).ready(function(){


    //set what happens when button is clicked        
    $("#target").click(function(){


        if(sound== null)
            sound="default";



        if (navigator.geolocation) {
            console.log("GPS is available");
            navigator.geolocation.getCurrentPosition(geoSuccess,geoError,geoOptions);
        } else { 
            notify("Whoops a campainha não funciona neste browser");
        }    
    });
});



function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
}



function geoSuccess(position) {
    console.log("Sucesso");


    d= distance(position.coords.latitude, position.coords.longitude
                , 38.738395, -9.138964, 'K');
    console.log(d);

    if(d<0.2)
    {  

        $.post('tocarCampainha.php',{s:sound}, function(info){

            //returns what postdingdong echoed
            notify("Ding Dong!");
            window.navigator.vibrate([200,300,800]);

            //console.log(info);

        });}else{
            notify("Estás longe demais");
        }

}


function distance(lat1, lon1, lat2, lon2, unit) {
    var radlat1 = Math.PI * lat1/180
    var radlat2 = Math.PI * lat2/180
    var theta = lon1-lon2
    var radtheta = Math.PI * theta/180
    var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
    dist = Math.acos(dist)
    dist = dist * 180/Math.PI
    dist = dist * 60 * 1.1515
    if (unit=="K") { dist = dist * 1.609344 }
    if (unit=="N") { dist = dist * 0.8684 }
    return dist
}

function notify(info)
{
    $("#result").html(info);
    $("#result").fadeTo(500,1).delay(1000).fadeTo(500,0);
}