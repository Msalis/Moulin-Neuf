/* ==========================================================
  Base Default JavaScript
  -- Table of Contents --
*/ 
// 1 - Config of slick (slider homepage)


$(document).ready(function(){
    
    //var nb_img = $('.slider').length();
    
 $('.img3').css({"transform":"scale(2)","opacity":"0"});
setTimeout(function() {
 $('.img3').css({"transform":"scale(1)","opacity":"1", "z-index":"-10"});
    }, 11000);

    setTimeout(function() {
     $('.img2').css({"transform":"scale(2)","opacity":"0"});
        }, 10000);
    setTimeout(function() {
 $('.img2').css({"transform":"scale(1)","opacity":"1", "z-index":"-10"});
    }, 21000);
    
        setTimeout(function() {
     $('.img1').css({"transform":"scale(2)","opacity":"0"});
        }, 20000);
    setTimeout(function() {
 $('.img1').css({"transform":"scale(1)","opacity":"1", "z-index":"-10"});
    }, 31000);

});