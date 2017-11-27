$(document).ready(function(){
    $("#hero .info a").on("mouseover", function(e){
        $(this).addClass("blink");
    }).on("mouseout", function(e) {
        $(this).removeClass("blink");
    });
});