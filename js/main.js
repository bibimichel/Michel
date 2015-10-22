//adding animation to the home page hover
/*$(function(){
    var animationName="animated zoomIn";
    var animationEnd = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
    $("#homepg-grid li").on("mouseenter", function(){
    $(".box").addClass(animationName).one(animationEnd,function(){
        $(this).removeClass(animationName);
    });
    });
})*/

//adding animation to the my work page li
$(document).ready(function(){
    var animationName="animated slideInUp";
    var animationEnd = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
    $("#my-work li").addClass(animationName).one(animationEnd,function(){
        $(this).removeClass(animationName);
    });
})

//adding animation to the my-time page li
$(document).ready(function(){
    var animationName="animated slideInUp";
    var animationEnd = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
    $("#my-time li").addClass(animationName).one(animationEnd,function(){
        $(this).removeClass(animationName);
    });
})

//adding animation on the buttons
/*$(function(){
    var animationName="animated tada";
    var animationEnd = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
    $(".btn").on("mouseenter", function(){
    $(".btn").addClass(animationName).one(animationEnd,function(){
        $(this).removeClass(animationName);
    });
    });
})*/


//page and navigation transition
$(document).ready(function() {
    $("body").css("display", "none");
 
    $("body").fadeIn(2000);
 
    $("a.transition").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(1000, redirectPage);      
    });
         
    function redirectPage() {
        window.location = linkLocation;
    }
});

$(document).ready(function(){
    $(".form-control").focus(function(){
        $(this).animate({
        backgroundColor: "red"
        });
    });
})




