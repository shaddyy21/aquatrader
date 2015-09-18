$(function(){
    $(".error").addClass("animated flash");
    $(".error").one("animationend",function(){
        $(".error").addClass("animated shake");
    });
    
    $(".addtocart").on("click", function (e){
        e.preventDefault();
        $(".addCart").removeClass("hide");
        setTimeout(function(){
           $(".addCart").addClass("show");
           $(".addCart").addClass("fadeInDown"); 
        },1);
        
        $(".addCart").one("animationend", function(){
            $(".addCart").removeClass("fadeInDown");
        });
        
    });
    
    $(".close").on("click", function (e){
        e.preventDefault();
        $(".addCart").removeClass("show");
        setTimeout(function(){
           $(".addCart").addClass("hide");
           $(".addCart").addClass("fadeInDown"); 
        },2);
        
        $(".addCart").one("animationend", function(){
            $(".addCart").removeClass("fadeInDown");
        });
    });
});