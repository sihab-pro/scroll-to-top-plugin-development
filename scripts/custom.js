(function($){

    jQuery(document).ready(function(){


        jQuery(window).scroll(function(){

            var heightFromTop = jQuery(window).scrollTop();
    
            if( heightFromTop > 200){
                 jQuery(".scroll-to-header").fadeIn();
            }else{
                jQuery(".scroll-to-header").fadeOut();
            }
          });



          jQuery(".scroll-to-header a").on('click', function(){

           jQuery("html, body").animate({'scrollTop': 0}, 1000)

            return false;
          })
    
    });

}(jQuery))