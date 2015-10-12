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
       
        History.pushState(null,null,url);
       
//        var spinner = new Spinner().spin();
//       
//        $(".main.group").append(spinner.el);
//       
//        $.get(url, function(data){
//            $(".main.group").empty().append(data);
//            console.log(data);
//        });
//        
    };
    
    History.Adapter.bind(window,'statechange',function(){ // Note: We are using statechange instead of popstate
        var state = History.getState(); // Note: We are using History.getState() instead of event.state
        var spinner = new Spinner().spin();
        
        $(".main.group").append(spinner.el);

        
        $.get(state.url, function(data){
            $(".main.group").empty().append(data);
        });
    });
    
    
    $("nav a").on("click",contentLoad);
    $(".main.group").on("click",".pagination a",contentLoad);
    
});