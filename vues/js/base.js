window.onload = function() {

$("#bienvenue").delay(1300).slideUp();

// -------------------------------------------------------------------------

$("#bouton").on('click', function(){
  $("#menuDeroulant").slideToggle("fast").toggleClass("cacherMenuDeroulant");
})

$("#boutonMenuGauche").on('click', function(){
  $("#iconeMenuGauche").toggleClass("blanc");
  $("#menuGauche").animate({width:'toggle'},200).toggleClass("cacherMenuGauche");
})

$("#boutonUtilisateur").on('click', function(){
  $("#menuUtilisateur").slideToggle("fast").toggleClass("cacherMenuUtilisateur");
})

$("#boutonLangues").on('click', function(){
  $("#listeLangues").slideToggle("fast").toggleClass("cacherListeLangues");
})

}
