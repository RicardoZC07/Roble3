
const dropdown = document.querySelector('.dropdown');
const body = document.body;

// Al pasar el cursor sobre el dropdown
dropdown.addEventListener('mouseenter', () => {
    body.classList.add('black-background'); // Agrega clase para fondo negro
});

// Al salir del dropdown
dropdown.addEventListener('mouseleave', () => {
    body.classList.remove('black-background'); // Elimina clase para restaurar el fondo
});
