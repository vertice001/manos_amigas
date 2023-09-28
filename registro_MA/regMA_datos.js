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

function validarRut() {

  var rutInput = document.getElementById("reg_rut");

  var rut = rutInput.value;
  // Eliminar puntos y guión del RUT
  rut = rut.replace(/\./g, "");
  rut = rut.replace(/\-/g, "");
  // Validar que el RUT tenga el formato correcto
  var regex = /^[0-9]+[0-9kK]{0,1}$/;
  if (!regex.test(rut)) {
    document.querySelector('#reg_btn').disabled = true;
    document.getElementById("reg_rut").style.color = "red";
    //document.querySelector('#rut').style.background="#ff6666;
    return;
  }
  // Validar que el RUT tenga al menos 7 dígitos
  if (rut.length < 8) {
    document.querySelector('#reg_btn').disabled = true;
    document.getElementById("reg_rut").style.color = "red";
    //document.querySelector('#rut').style.background="#ff6666";
    return;
  }

  // Formatear el RUT
  var rutFormateado = "";
  var rutSinDv = rut.slice(0, -1);
  var dv = rut.slice(-1);
  for (var i = rutSinDv.length - 1, j = 0; i >= 0; i--, j++) {
    if (j > 0 && j % 3 === 0) {
      rutFormateado = "." + rutFormateado;
    }
    rutFormateado = rutSinDv.charAt(i) + rutFormateado;
  }

  rutFormateado += "-" + dv;
  // Validar el dígito verificador del RUT
  var suma = 0;
  var multiplo = 2;
  for (var i = rutSinDv.length - 1; i >= 0; i--) {
    suma += rutSinDv.charAt(i) * multiplo;
    multiplo++;
    if (multiplo === 8) {
      multiplo = 2;
    }
  }
  var resto = suma % 11;
  var dvCalculado = 11 - resto;
  if (dvCalculado === 11) {
    dvCalculado = "0";
  } else if (dvCalculado === 10) {
    dvCalculado = "K";
  } else {
    dvCalculado = dvCalculado.toString();
  }

  if (dvCalculado !== dv.toUpperCase()) {
    document.getElementById("reg_rut").style.color = "red";
    document.querySelector('#reg_btn').disabled = true;
    //document.querySelector('#rut').style.background="#ff6666";
    return;
  }

  // Si llegamos hasta aquí, el RUT es válido
  rutInput.value = rutFormateado;
  //document.getElementById("rut-error").innerHTML = "El RUT ingresado es válido.";
  document.getElementById("rut-error").innerHTML = "";
  //document.getElementById("btnEnviar").element.disabled="false";


  //document.querySelector('#rut').style.background="#55ff00";
  document.getElementById("reg_rut").style.color = "black";
}

function soloLetras(e) {
  var key = e.keyCode || e.which;
  var tecla = String.fromCharCode(key).toLowerCase();
  var letras = "áéíóúabcdefghijklmnñopqrstuvwxyz ";

  if (letras.indexOf(tecla) === -1) {
      e.preventDefault();
  }
}

function soloNum(e) {
  var key = e.keyCode || e.which;
  var tecla = String.fromCharCode(key).toLowerCase();
  var numero = "1234567890";

  if (letras.indexOf(tecla) === -1) {
      e.preventDefault();
  }
}


function toggleButton() {
  var nombre = document.getElementById('reg_nom').value;
  var ape_pa = document.getElementById('reg_ape_pa').value;
  var fnac = document.getElementById('reg_fnac').value;
  var ape_ma = document.getElementById('reg_ape_ma').value;
  var rut = document.getElementById('reg_rut').value;
  var region = document.getElementById('reg_region').value;
  var ciudades = document.getElementById('reg_ciudades').value;
  var direccion = document.getElementById('reg_direc').value;
  var phone = document.getElementById('reg_phone').value;
  var email = document.getElementById('reg_mail').value;
  var pass = document.getElementById('reg_rep_pass').value;

  if (rut && nombre &&  fnac && email && ape_pa && fnac && ape_ma && region && ciudades && direccion && phone && pass) {
    document.getElementById('reg_btn').disabled = false;
  } else {
    document.getElementById('reg_btn').disabled = true;
  }
}

function verificarContraseñas() {
  var pass = document.getElementById('reg_pass').value;
  var confirmarPass = document.getElementById('reg_rep_pass').value;
  var mensajeError = document.getElementById('error-pass');

  if (pass === confirmarPass) {
      mensajeError.textContent = ''; // Borra el mensaje de error si las contraseñas coinciden
      toggleButton(); // Habilita o deshabilita el botón de registro
  } else {
      mensajeError.textContent = 'Las contraseñas no coinciden';
      document.getElementById('reg_btn').disabled = true; // Deshabilita el botón si las contraseñas no coinciden
  }
}

function verificarCorreo() {
  const correoInput = document.getElementById('reg_mail');
  const correo = correoInput.value;
  const mensajeError = document.getElementById('error-mail');

  const regexCorreo = /^[a-zA-Z]{2,}@[a-zA-Z]+\.[a-zA-Z]{2,}$/;

  if (!regexCorreo.test(correo)) {
      mensajeError.textContent = "Formato de correo no válido";
      correoInput.classList.add('is-invalid');
  } else {
      mensajeError.textContent = "";
      correoInput.classList.remove('is-invalid');
  }

  toggleButton();
}
