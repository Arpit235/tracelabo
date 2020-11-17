$("button[name='btnSupp']").on('click', function() {
  var id = $(this).attr('title');
  $(".message").append(id);
  $("#formPopup").attr("action", '../../controleurs/supprimerFaq.php');
  $("input[name='idPopup']").val(id);
  $('#popup').css("display", "block");
})

$("button[name='btnAnnuler']").on('click', function() {
  $('#popup').css("display", "none");
  $(".message").text($(".message").text().substring(0,31))
})
