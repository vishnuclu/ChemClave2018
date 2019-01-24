$(function(){
  
  var $window = $(window);    //Window object
  
  var scrollTime = 0.4;     //Scroll time
  var scrollDistance = 450;   //Distance. Use smaller value for shorter scroll and greater value for longer scroll
    
  $window.on("mousewheel DOMMouseScroll", function(event){
    
    event.preventDefault(); 
                    
    var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
    var scrollTop = $window.scrollTop();
    var finalScroll = scrollTop - parseInt(delta*scrollDistance);
      
    TweenMax.to($window, scrollTime, {
      scrollTo : { y: finalScroll, autoKill:true },
        ease: Power1.easeOut, //easing functions see https://api.greensock.com/js/com/greensock/easing/package-detail.html
        autoKill: true,
        overwrite: 5              
      });
          
  });
  
});

$(document).ready(function(){
  window.onscroll = function() {myFunction()};
  // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
  // Get the navbar
  var navbar = document.getElementById("navbar");
  // Get the offset position of the navbar
  var sticky = document.getElementById("navbar").offsetTop;    
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } 
    if(window.pageYOffset === 0) {
      navbar.classList.remove("sticky");
    }
  }
});