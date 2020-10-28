$('document').ready(function(){
  // .comment Slider
  $('.comment-slider').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
    dots:true,
    autoplay:true,
    autoplaySpeed:1000,
    smartSpeed:1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})

// Footer Slider 

$('.footer-slider-active').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay:true,
    autoplaySpeed:1500,
  });
})