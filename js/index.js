window.onload = function () {
  var abrir = document.getElementById("abrir");
  document.getElementById("abrir").addEventListener("click", function() {
    var ventana = window.open("credits.txt", "newWindow", "top=350, left=700, width=500px,height=150px");
  });  
}