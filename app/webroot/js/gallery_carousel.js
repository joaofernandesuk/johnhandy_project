$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    direction: "horizontal",
    slideshow: false,
    itemWidth: 60,
    itemMargin: 0,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    direction: "horizontal",
    animationLoop: false,
    slideshow: false,
    itemMargin: 0,
    sync: "#carousel"
  });
});