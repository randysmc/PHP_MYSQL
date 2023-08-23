document.addEventListener("")


/*

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

let validarFormulario = evento => {
    evento.preventDefault();
    let usuario = document.getElementById('title').value;
    if (usuario.length == 0) {
        alert('El titulo de la tarea es obligatorio!');
        return;
    }
    let descripcion = document.getElementById('descripcion').value;
    if (descripcion.length < 15) {
        alert('La descripcion debe tener al menos 15 caracteres');
        return;
    }
    document.forms['formulario'].submit();
}


*/