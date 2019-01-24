$(document).ready(function(){
  $('#workshops a,#events a,#ov a').click(function(){
    var temp = ".".concat($(this).children("img").attr("class").concat("data"));
    console.log(temp);
    if($($(this).attr("href")).hasClass("expand")){
      console.log(1); 
      if($('.active').hasClass(temp.substr(1,))){
        console.log($('.active')[0]);
        $(temp).removeClass("active");
        $($(this).attr("href")).removeClass("expand");
      }
      else{
        console.log(".".concat($(this).attr("href").substr(1,).concat('data .active')));
        $(".".concat($(this).attr("href").substr(1,).concat('data .active'))).removeClass('active');
        window.setTimeout(function(){
          $(temp).addClass('active');
        },600);
      }
    }
    else{
      $(temp).addClass('active');
      $($(this).attr("href")).addClass("expand");   
    }
    //check anyone is active
    //var myclass = $(this).attr("class").concat("data");
    //if($('.active')[0]){
     // $('.active').removeClass("active");
     // window.setTimeout(function(){
      //  $(".".concat(myclass)).addClass('active');
      //  $('a:has(".".concat($(this).attr("class")))').trigger("click");  
      //},500);
      //else{
        
      //  $('.active').addClass('inactive');
      //  $(".".concat(myclass)).addClass('inactive');
      //  $(".".concat(myclass)).addClass('activetemp');
      //  window.setTimeout(function(){
      //    $('.active').removeClass('inactive');
      //    $('.active').removeClass('active');
      //    $(".".concat(myclass)).removeClass('inactive');
      //    $(".".concat(myclass)).addClass('active');
      //    $('.active').removeClass('activetemp');
      //  },500);
      //}
    //}
    //else{
      //$(".".concat(myclass)).toggleClass("active");
    //}
  });
});
