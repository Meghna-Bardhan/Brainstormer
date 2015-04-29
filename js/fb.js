$(function(){
       $(".facebook_right").hover(function(){
       $(".facebook_right").stop(true, false).animate({right: "0" }, 800, 'easeOutQuint' );
       },
 function(){
       $(".facebook_right").stop(true, false).animate({right: "-245" }, 800, 'easeInQuint' );
       },1000);
 });

 $(function(){
       $(".facebook_left").hover(function(){
       $(".facebook_left").stop(true, false).animate({left: "0" }, 800, 'easeOutQuint' );
       },
 function(){
       $(".facebook_left").stop(true, false).animate({left: "-245" }, 800, 'easeInQuint' );
       },1000);
 })