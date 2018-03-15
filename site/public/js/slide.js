$(function(){


  $(".slide").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    prevArrow: false,
    nextArrow: false

  });
  $(".pre-slide").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll:1,
    prevArrow:"<i class='material-icons arrowsPre arrowLEFT'>arrow_back</i>",
    nextArrow:"<i class='material-icons arrowsPre arrowRIGHT'>arrow_forward</i>",


  });

  $('.slide-box2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    adaptiveHeight: false,
    prevArrow:"<i class='material-icons arrowsPre arrowLEFT'>arrow_back</i>",
    nextArrow:"<i class='material-icons arrowsPre arrowRIGHT'>arrow_forward</i>",
    asNavFor: '.slide-box2-thumbnail'
  });

  $('.slide-box2-thumbnail').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slide-box2',
    dots: false,
    arrows: false,
    focusOnSelect: true,
    adaptiveHeight: false,
    variableWidth: true
  });




});
