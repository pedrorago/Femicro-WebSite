$(function(){
  linksHover();
  menuHover();
  scrollTop();

  var track = $("#index").find(".slick-track");
  var blend = $(".blend-slide");
  track.prepend(blend);

  $(".area-clicavel").on('click', function() {
  // $(".funcionarios-box").addClass('funcionariosOn');
  $('.content').addClass('blur');
  $(".modal-funcionario").fadeIn(200);
  $('.modal-funcionario').addClass('modalOn');
  var nome = $(".area-clicavel").data('nome');
  var img = $(".area-clicavel").data('img');
  var desc = $(".area-clicavel").data('desc');
  var cargo = $(".area-clicavel").data('cargo');
  $(".modal-funcionario h2").text(nome);
  $(".modal-funcionario h3").text(cargo);
  $(".modal-funcionario p").text(desc);
  $(".modal-funcionario img").attr('src', img);

});

  $(".anuncios-box").on('click', function() {
  // $(".funcionarios-box").addClass('funcionariosOn');
  $('.content').addClass('blur');
  $(".modal-funcionario").fadeIn(200);
  $('.modal-funcionario').addClass('modalOn');
  var nome1 = $(".anuncios-box").data('nome');
  var img1 = $(".anuncios-box").data('img');
  var desc1 = $(".anuncios-box").data('desc');
  var lugar1 = $(".anuncios-box").data('cargo');
  $(".modal-funcionario h2").text(nome1);
  $(".modal-funcionario h3").text(lugar1);
  $(".modal-funcionario p").text(desc1);
  $(".modal-funcionario img").attr('src', img1);

});

  $(".fecha-modal").on('click', function() {
    $('.content').removeClass('blur');
    $(".modal-funcionario").fadeOut(200);
    $('.modal-funcionario').removeClass('modalOn');

  });
  $(".area-clicavel").hover(function() {
    $(this).closest('[data-id]').toggleClass('funcionariosOn');
  });

  $(window).scroll(function () { 
    if ($(this).scrollTop() > 180) { 

      $(".menu-abrir1").on("click", function() {
        document.documentElement.classList.add('menu-ativo');
        $(".logo1").delay(500).attr('src', 'img/Logo_red.png').css("height", "6.1em").css("margin-top", ".5em");
      });
      $(".nav-links1").find("a").delay(500).css('color', '#8A1F14');
      $(".logo1").delay(500).attr('src', 'img/Logo_red.png').css("height", "6.1em").css("margin-top", ".5em");
      $(".sidebar1").delay(500).css('background-color', '#fff');
      $(".sidebar1").delay(500).css("box-shadow", "inset 0 -1px 0 #e0e5f0");
      $(".menu-abrir1").delay(500).css("color", "#BF3729");
      $(".sidebar1").hover(
        function(){
          $(".nav-links11").find("a").delay(500).css('color', '#8A1F14');
          $(".logo").delay(500).attr('src', 'img/Logo_red.png').css("height", "6.1em").css("margin-top", ".5em");
        },
        function(){
          $(".nav-links1").find("a").delay(500).css('color', '#8A1F14');
          $(".logo1").delay(500).attr('src', 'img/Logo_red.png').css("height", "6.1em").css("margin-top", ".5em");
        }
        );
    } else { 
      $(".nav-links1").find("a").delay(500).css('color', 'white');
      $(".logo1").delay(500).attr('src', 'img/Logo.svg').css("height", "auto").css("margin-top", "0");
      $(".sidebar1").delay(500).css('background-color', '');
      $(".sidebar1").delay(500).css("box-shadow", "");
      $(".menu-abrir1").delay(500).css("color", "#fff");
      menuHover();
    } 
  }); 

  // $('#btnRede').on('click', function() {
  //   $(this).css('background-color', '#ad3225');
  //   setTimeout(function(){
  //     $(this).css('background-color', '#BF3729');
  //   },10);
  // });

});



function scrollTop () {
  $('.scrolltop').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return true;
  });
}

function menuHover () {
  var cabecalho = $(".sidebar1");
  cabecalho.hover(
    function(){
      $(".nav-links1").find("a").delay(500).css('color', '#8A1F14');
      $(".logo1").delay(500).attr('src', 'img/Logo_red.png').css("height", "6.1em").css("margin-top", ".5em");
    },
    function(){
     $(".nav-links1").find("a").delay(500).css('color', 'white');
     $(".logo1").delay(500).attr('src', 'img/Logo.svg').css("height", "auto").css("margin-top", "0");
   }
   );
}
function linksHover () {
 $(".nav-links1").hover(function(){
  $(this).find("a").css("color", "#BF3729");
},
function(){
  $(this).find("a").css("color", "#8A1F14");
});
}


function menuAtivo () {
  $(".menu-abrir1").on("click", function() {
    document.documentElement.classList.add('menu-ativo');
    $(".logo1").delay(500).attr('src', 'img/Logo_red.png').css("height", "6.1em").css("margin-top", ".5em");
    $(".nav-links1").find("a").delay(500).css('color', '#8A1F14');
  });
}

function fechaMenu() {
  $(".menu-fechar1").on("click", function() {
    document.documentElement.classList.remove('menu-ativo');
    $(".logo1").delay(500).attr('src', 'img/Logo.svg').css("height", "auto").css("margin-top", "0");
    $(".sidebar1").delay(500).css('background-color', '');
    $(".sidebar1").delay(500).css("box-shadow", "");
    $(".menu-abrir1").delay(500).css("color", "#fff");



  });
} 
function fechaMenu2() {
  $(".menu-fechar1").on("click", function() {
    document.documentElement.classList.remove('menu-ativo');
    $(".logo1").delay(500).attr('src', 'img/Logo_red.png').css("height", "6.1em").css("margin-top", ".5em");
    $(".sidebar1").delay(500).css('background-color', '#fff');
    $(".sidebar1").delay(500).css("box-shadow", "inset 0 -1px 0 #e0e5f0");
    $(".menu-abrir1").delay(500).css("color", "#BF3729");
  });
} 

