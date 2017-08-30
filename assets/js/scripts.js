// jQuery
$(function() {
   $('#featured-carousel').hover(
       function() {
           $('#featured-carousel .carousel-control.left, #featured-carousel .carousel-control.right, #featured-carousel .carousel-indicators').fadeIn();
       }, function() {
           $('#featured-carousel .carousel-control.left, #featured-carousel .carousel-control.right, #featured-carousel .carousel-indicators').fadeOut();
       }
   );
});