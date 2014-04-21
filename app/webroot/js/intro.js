$(document).ready(function(){
	/*$(function(){
        var images = ['#fase1', '#fase2', '#fase3'],
            imgIx = 0;

        (function nextImage(){
            $(images[imgIx++] || images[imgIx = 0, imgIx++]).
               	show().animate({right: '0px'},500).delay(3000).animate({right: '1000px'}).
               	animate({top: '350px'}).animate({right: '-1000px'}).animate({top: '0px'}).
                hide(nextImage);
        })();
    });*/

	$("#owl-demo").owlCarousel({
 		
 		autoPlay: 3000, //Set AutoPlay to 3 seconds
     	navigation : true, // Show next and prev buttons
      	slideSpeed : 300,
     	 paginationSpeed : 400,
     	 singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
	});

	$(".back_to_top").click(function(){
 		event.preventDefault();
 		
	 	if ($('.shadowclass').length)
	 	{
	 		$("body").animate({backgroundPositionX: '50%', backgroundPositionY: '3%'} ,1000);
 			$("body").animate({backgroundSize:'50%'},1000);
	 		$("#container").animate({marginTop:'-11%'},800); 
		 	$(".shadow").animate({left: '50%'}, 1000);
		 	$(".shadow").animate({left: '36%', width: '30%'}, 1000); 
	 		$(".text_intro").animate({right: '0%'}, 500);
 			$(".scroll_to_menu").animate({right: '0%'}, 200);
 			$("html").removeClass('shadowclass');
 		}
 		else
 		{
 			$("html, body").animate({scrollTop:0});
 		}

	});

	$(".scroll_to_menu").click(function(){
 		event.preventDefault();
    $("html, body").animate({scrollTop:530});

 		/* $(".text_intro").animate({right: '-100%'}, 500);
 		$(".scroll_to_menu").animate({right: '-100%'}, 500);
 		$("body").animate({backgroundSize:'20%'},"slow");
 		$("body").animate({backgroundPositionX: '5%', backgroundPositionY: '1%'} ,1000);
	 	$(".shadow").animate({width: '0%'});
	 	$("html").addClass('shadowclass');
	 	$("#container").animate({marginTop:'-44%'},800);
	 	$("html, body").animate({scrollTop:0}); */
	});

	/* $(".stay_in_menu").click(function(){
		event.preventDefault();
	}); */

});

/* $(document).scroll(function(e){
 
    // grab the scroll amount and the window height
    var scrollAmount = $(window).scrollTop();
    var documentHeight = $(document).height();
 
    // calculate the percentage the user has scrolled down the page
    var scrollPercent = (scrollAmount / documentHeight) * 100;

    if(scrollPercent > 20) {
        // run a function called doSomething
        doSomething();
    }
    else {
    	if ($('.scrollDown_class').length){
    		doNothing();
    	}
    }
 
    function doSomething() { 
        // do something when a user gets 50% of the way down my page
        event.preventDefault();
 		$("body").animate({backgroundSize:'20%'},"slow");
 		$("body").animate({backgroundPositionX: '5%', backgroundPositionY: '25%'} ,1000);
	 	$(".shadow").animate({width: '0%'});
	 	$("html").addClass('scrollDown_class');
    }

    function doNothing() { 
        // do something when a user gets 50% of the way down my page
        event.preventDefault();

	 	$("body").animate({backgroundPositionX: '50%', backgroundPositionY: '3%'} ,1000);
	 	$("body").animate({backgroundSize:'50%'},1000);
		$(".shadow").animate({left: '50%'}, 1000);
		$(".shadow").animate({left: '36%', width: '30%'}, 1000); 
		$("html").removeClass('scrollDown_class');
    }
 
}); */