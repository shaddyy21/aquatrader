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
    
   var contentLoad = function(e){
        e.preventDefault();
        
        var url = $(this).attr("href");     
        var spinner = new Spinner().spin();
       
        $(".main.group").append(spinner.el);
       
        $.get(url, function(data){
            $(".main.group").empty().append(data);
            console.log(data);
        });
        
    };
    
    $("nav a").on("click",contentLoad);
    $(".main.group").on("click",".pagination a",contentLoad);
    
});