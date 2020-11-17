 function menu() {
  var x = document.getElementById("menuDeroulant");
  if (x.style.visibility === "visible") {
    x.style.visibility = "hidden";
  } else {
    x.style.visibility = "visible";
  }
}

function menuUtilisateur() {
  var x = document.getElementById("menuUtilisateur");
  if (x.style.visibility === "visible") {
    x.style.visibility = "hidden";
  } else {
    x.style.visibility = "visible";
  }
}

function menuGauche() {
  var x = document.getElementById("menuGauche");
  if (x.style.visibility === "visible") {
    x.style.visibility = "hidden";
  } else {
    x.style.visibility = "visible";
  }
}

function popup() {
  var x = document.getElementById("popup");
  x.style.display = "block";
}

function fermerPopup() {
  var x = document.getElementById("popup");
  x.style.display = "none";
}
