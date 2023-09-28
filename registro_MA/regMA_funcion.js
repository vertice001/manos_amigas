function enviarDatos() {
  var rut = $('#reg_rut').val();
  var nombre = $('#reg_nom').val();
  var ape_pa = $('#reg_ape_pa').val();
  var ape_ma = $('#reg_ape_ma').val();
  var fnac = $('#reg_fnac').val();
  var direccion = $('#reg_direc').val();
  var telefono = $('#reg_phone').val();
  var email = $('#reg_mail').val();
  var region = $('#reg_region').val(); // Cambio de "pais" a "region"
  var ciudad = $('#reg_ciudades').val();
  var pass = $('#reg_rep_pass').val();

  // Obtén el archivo de la entrada de imagen
  var photoInput = document.getElementById('photo_profile');
  var photo = photoInput.files[0];

  // Crea un objeto FormData para enviar archivos
  var formData = new FormData();
  formData.append('reg_rut', rut);
  formData.append('reg_nom', nombre);
  formData.append('reg_ape_pa', ape_pa);
  formData.append('reg_ape_ma', ape_ma);
  formData.append('reg_fnac', fnac);
  formData.append('reg_direc', direccion);
  formData.append('reg_phone', telefono);
  formData.append('reg_mail', email);
  formData.append('reg_region', region); // Cambio de "pais" a "region"
  formData.append('reg_ciudades', ciudad);
  formData.append('reg_rep_pass', pass);
  formData.append('photo_profile', photo);

  $.ajax({
    data: formData,
    url: 'http://localhost/MA/reg_data_MA.php',
    type: 'POST',
    processData: false,
    contentType: false,
    dataType: 'json',
    success: function (response) {
      Swal.fire({
        icon: 'success',
        title: 'Datos ingresados con éxito.',
        showConfirmButton: false,
        timer: 1500
      });
    },
    error: function (xhr, status, error) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Algo salió mal: ' + error,
      });
    }
  });
}



function redirigirPagina() {
    // Aquí puedes especificar la URL de la página a la que deseas redirigir
    var nuevaPagina = "../login_MA/login_MA.html";
    
    // Redirigir a la nueva página
    window.location.href = nuevaPagina;
}

