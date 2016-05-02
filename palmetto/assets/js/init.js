(function($){
  $(function(){

    $('.button-collapse').sideNav();

			
$('.lazy-slider').slick({
  lazyLoad: 'ondemand',
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  nextArrow: '<img class="slick-next" src="assets/img/arrow-right.png">',
  prevArrow: '<img class="slick-prev" src="assets/img/arrow-left.png">',
});
			
  }); // end of document ready
})(jQuery); // end of jQuery name spacev