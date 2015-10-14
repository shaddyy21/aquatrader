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
    
    /*=============================================================================================================*/
    /*                                                    Ajax                                                     */
    /*=============================================================================================================*/
//       var contentLoad = function(e){
//            e.preventDefault();
//           
//            var url = $(this).attr("href");    
//           
//            History.pushState(null,null,url);
//        };
//    
//        History.Adapter.bind(window,'statechange',function(){ // Note: We are using statechange instead of popstate
//            var state = History.getState(); // Note: We are using History.getState() instead of event.state
//            var spinner = new Spinner().spin();
//            
//            $(".main.group").append(spinner.el);
//            
//            $.get(state.url, function(data){
//                $(".main.group").empty().append(data);
//            });
//        });
//    
//        $("nav a").on("click",contentLoad);
//        $(".main.group").on("click",".pagination a",contentLoad);
    /*=============================================================================================================*/
    
    
    /*=============================================================================================================*/
    /*                                                  Editable                                                   */
    /*=============================================================================================================*/
        $("[data-field]").each(function(i,e){
            var url = window.location.href;
            var options = {
                event: "dblclick",
                cssclass: "editable",
                type: "textarea",
                submitdata: {
                    _method: "PUT",
                    _token: $("#token").text(),
                    field: $(e).attr("data-field")
                },
                cancel: "Cancel",
                submit: "Save",
                indicator: "Saving..........."
            };
            $(e).editable(url,options);
        });
   /*=============================================================================================================*/
  
    
    /*=============================================================================================================*/
    /*                                         WYSIWYG                                                             */
    /*=============================================================================================================*/
        $(document).on("DOMNodeInserted",function(e){
            if($(e.target).hasClass("editable")){
                tinymce.editors=[];
                tinymce.init({selector:'.editable textarea'});
            }
        });
    
    /*=============================================================================================================*/
    
    
});