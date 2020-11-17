$window = $(window);

var hauteurPrecedente = 0;

$window.on('scroll', function(){
  var scrollTop = $window.scrollTop();
  var basFenetre = $window.scrollTop() + $window.height();

  $('nav').toggleClass('cacherDefilement', scrollTop > hauteurPrecedente);
  $('#menuDeroulant').toggleClass('cacherDefilement', scrollTop > hauteurPrecedente);

  if (scrollTop < hauteurPrecedente) {
    $('#backtotop').fadeOut(300);
  }
  else if (scrollTop > hauteurPrecedente) {
    $('#backtotop').fadeIn(300);
  }
  hauteurPrecedente = scrollTop;

// -------------------------------------------------------------------------

  $('.animer').each( function(){

    var basObjet = $(this).offset().top + $(this).outerHeight();

    if (basFenetre > basObjet) {
      $(this).animate({'opacity':'1'},500);
    }
  });

  $('.imgSlideLeft').each( function(){

    var basObjet = $(this).offset().top + $(this).outerHeight();

    if (basFenetre > basObjet) {
      $(this).animate({'left':'0px'},700);
    }
  });

  $('.imgSlideRight1').each( function(){

    var basObjet = $(this).offset().top + $(this).outerHeight();

    if (basFenetre > basObjet) {
      $(this).animate({'right':'8%'},700);
      $(".imgSlideRight2").animate({'right':'4%'},700);
    }
  });

});
