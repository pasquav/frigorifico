const username = "admin";
const password = "admin";

function validateUser(user, pass) {
  if (user === username && pass === password) {
    window.location.href = "index.php";
  } else {
    alert("Usuário ou senha inválidos. Por favor, tente novamente.");
  }
}