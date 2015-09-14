$(function(){
    $(".error").addClass("animated flash");
    $(".error").one("animationend",function(){
        $(".error").addClass("animated shake");
    });    
});