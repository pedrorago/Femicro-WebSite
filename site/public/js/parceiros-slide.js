$(document).ready(function(){
  $('.parceiros-slide').slick({
     dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  prevArrow:"<i class='material-icons arrowsicon back'>arrow_back</i>",
   nextArrow:"<i class='material-icons arrowsicon next'>arrow_forward</i>",


  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });

  // var arrows = $(".arrows");
  // var iconsback = $(".back");
  // var iconsnext = $(".next");

  // arrows.append(iconsback);
  // arrows.append(iconsnext);


});

function tirarotacao(){
  $(".parceiros-box").css("animation","");
    $(".parceiros-box").css("rotate","");
}