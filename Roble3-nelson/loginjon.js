// Selección de elementos del DOM
const loginForm = document.getElementById("login-form");
const signupForm = document.getElementById("signup-form");
const toggleButtons = document.querySelectorAll(".toggle-buttons button");

// Función para mostrar el formulario de login
function showLogin() {
  loginForm.classList.add("active");
  signupForm.classList.remove("active");

  // Cambiar el estado de los botones
  toggleButtons[0].classList.add("active");
  toggleButtons[1].classList.remove("active");
}

// Función para mostrar el formulario de sign-up
function showSignUp() {
  signupForm.classList.add("active");
  loginForm.classList.remove("active");

  // Cambiar el estado de los botones
  toggleButtons[1].classList.add("active");
  toggleButtons[0].classList.remove("active");
}
