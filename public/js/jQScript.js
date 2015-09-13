$(function(){
   highlight: function(element,errorClass){
        $(".error").addClass("animated shake");
        $(".error").one("animationend",function(){
            $(".error").removeClass("animated shake");
        });
    }
    
});