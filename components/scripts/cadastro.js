// Variables
const btnCadastrar = document.getElementById("btnCadastrar");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");

// Functions
const ValidateInfo = (event) => {
  if (username.value == "" || email.value == "" || password.value == "") {
    event.preventDefault();
  } else {
  }
};

// Events
btnCadastrar.addEventListener("click", ValidateInfo);
