
function mostrarImagen(event) {
    var imagen = document.getElementById('imagenPerfil');
    imagen.src = URL.createObjectURL(event.target.files[0]);
}

function abrirSeleccionArchivo() {
    var inputArchivo = document.getElementById('photo_profile');
    inputArchivo.value = null; // Limpiar el valor del input para evitar problemas de caché
    inputArchivo.click();
}

function handleInputChange(event) {
    var inputArchivo = event.target;
    if (inputArchivo.files && inputArchivo.files[0]) {
        mostrarImagen(event);
    }
}








$(document).ready(function () {
    // Evento del formulario de envío
    $('#formulario').submit(function (event) {
        event.preventDefault(); // Evitar el envío del formulario por defecto

        var rut = $('#rut').val();
        var foto_postulante = $('#foto_postulante').val(); // Asumí que hay un campo para la foto
        var nombre = $('#nombre_postulante').val();
        var apellido_p = $('#apellido_p').val();
        var apellido_m = $('#apellido_m').val();
        var fecha_nacimiento = $('#fecha_nacimiento').val();
        var direccion = $('#direccion').val();
        var region = $('#region').val();
        var ciudad = $('#ciudad').val();
        var email = $('#email').val();
        var telefono = $('#telefono').val();
        var contraseña = $('#contrasena').val();
        var estado = $('#estado').val();


        var datos = {
            rut: rut,
            foto_postulante: foto_postulante,
            nombre: nombre,
            apellido_p: apellido_p,
            apellido_m: apellido_m,
            fecha_nacimiento: fecha_nacimiento,
            direccion: direccion,
            region: region,
            ciudad: ciudad,
            email: email,
            telefono: telefono,
            contraseña: contraseña

        };

        // Realizar la solicitud AJAX
        $.ajax({
            url: "http://localhost:80/bba_manos_amigas/bba.php",
            method: 'POST',
            dataType: 'json',
            data: datos,
            success: function (response) {
                if (response.status === 'success') {
                    alert(response.message);
                } else {
                    alert(response.message);
                }
            },
            error: function (xhr, status, error) {
                alert(response.error);
            }
        });
    });
})

