function searchBar() {
    var searchInput = document.getElementById('search-input');
    var searchIcon = document.getElementById('search-icon');
  
    searchIcon.addEventListener('click', function() {
      var searchTerm = searchInput.value;
      // Realiza alguna acción con el término de búsqueda
      console.log('Término de búsqueda:', searchTerm);
    });
}


function iniciarSesion() {
    // Obtener valores de correo electrónico y contraseña desde los campos de entrada
    var email = document.getElementById("log_mail").value;
    var password = document.getElementById("log_pass").value;

    // Realizar una solicitud AJAX al servidor para verificar las credenciales
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                if (data.EMAIL) {
                    // Si las credenciales son válidas, actualizar la página con los datos del usuario
                    var userImage = document.getElementById("user-profile");
                    userImage.src = URL.createObjectURL(blob) + data.FOTO_POSTULANTE;
                    userImage.alt = "Foto de perfil";

                    var userName = document.getElementById("user-name");
                    userName.textContent = data.NOMBRE_POSTULANTE;

                

                    // Aquí puedes mostrar otros datos del usuario
                } else {
                    // Mostrar un mensaje de error si las credenciales son incorrectas
                    alert("Credenciales incorrectas");
                }
            } else {
                // Mostrar un mensaje de error si hubo un error en la solicitud AJAX
                alert("Error al realizar la solicitud");
            }
        }
    };

    xhr.open("POST", "verificarDatos_MA.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("log_mail=" + email + "&log_pass=" + password);
}


  