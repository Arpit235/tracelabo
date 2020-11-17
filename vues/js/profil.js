$(".modifier").on("click", function(){
  $(this).hide();
  $(this).parent().parent().children().find(".annuler").show();
  $(this).parent().parent().children().find(".valeurNormale").hide(300);
  $(this).parent().parent().children().find(".valeurInput").show(300);
  $(this).parent().parent().children().find("button").show(300);
});

$(".annuler").on("click", function(){
  $(this).hide();
  $(this).parent().parent().children().find(".modifier").show();
  $(this).parent().parent().children().find(".valeurInput").hide(300);
  $(this).parent().parent().children().find("button").hide(300);
  $(this).parent().parent().children().find(".valeurNormale").show(300);
});

/*
$(this).parent().parent().children().next().each(function(){
  $(this).delay(1000).hide(300);
});
*/
