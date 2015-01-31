$(document).ready(function(){
    var devMode = true;

    if(devMode){
        $("#site-css").remove();
        window.location.hash = "!watch";
    }

});