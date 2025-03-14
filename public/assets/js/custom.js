/*------------------------------------- Slider -------------------------------------*/
$('.testimonial-sec-wrap').slick({
  dots: false,
  arrows: false,
  infinite: false,
  autoplay:true,
  speed: 300,
  rows: 0 ,
  slidesToShow: 1,
  slidesToScroll: 1
});

/*------------------------------------- Preloader -------------------------------------*/
$(window).on("load", function() {
  $('.loader').delay(1000).fadeOut(800); 
});