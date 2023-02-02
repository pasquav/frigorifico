// Obtenha o botão
var btn = document.getElementById("insereDados");

// Obtenha o modal
var modal = document.getElementById("insereDados");

// Obtenha o elemento span que fecha o modal
var span = document.getElementsByClassName("close")[0];

// Quando o usuário clica no botão, abra o modal
btn.onclick = function() {
  modal.style.display = "block";
}

// Quando o usuário clica em fechar, feche o modal
span.onclick = function() {
  modal.style.display = "none";
}

// Quando o usuário clica fora do modal, feche-o
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}