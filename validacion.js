document.addEventListener("")




document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

let validarFormulario = evento => {
    evento.preventDefault();
    let usuario = document.getElementById('title').value;
    if (usuario.length == 0) {
        alert('El titulo del libro es obligatorio!');
        return;
    }

}


