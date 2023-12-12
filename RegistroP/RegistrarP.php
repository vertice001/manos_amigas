<!DOCTYPE html>
<html lang="es">

<head>

    <title>Crear Cuenta</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Registrar.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</head>

<body class="p-3 m-0 border-0 bd-example">

    <form id="formulario" action="" method="post">
        <?php
        include("listado.php");
        $cnn = Conectar();


        ?>
        <div id="contenido">
            <h1>Ingresa Tu Informacion Personal</h1>
            <h3>Foto de Perfil</h3>
            <div class="photo_user">
                <div id="contenedorPerfil" onmouseover="mostrarIconoMas()" onmouseout="ocultarIconoMas()">
                    <img id="imagenPerfil" src="../default.png" alt="Foto de perfil">
                    <label id="photo_button" for="photo_profile">
                        <span id="iconoMas" style="display: none;"><i class="fas fa-camera"></i></span>
                        <script>
                            function handleInputChange(event) {
                                const fileInput = event.target;
                                const file = fileInput.files[0];

                                if (file) {
                                    const reader = new FileReader();

                                    reader.onload = function(e) {
                                        const imagenPerfil = document.getElementById('imagenPerfil');
                                        imagenPerfil.src = e.target.result;
                                    };

                                    reader.readAsDataURL(file);
                                }
                            }

                            function mostrarIconoMas() {
                                const iconoMas = document.getElementById('iconoMas');
                                iconoMas.style.display = 'block';
                            }

                            function ocultarIconoMas() {
                                const iconoMas = document.getElementById('iconoMas');
                                iconoMas.style.display = 'none';
                            }
                        </script>
                    </label>
                </div>

                <input id="photo_profile" name="photo_profile" type="file" accept="image/*" onchange="handleInputChange(event)">
            </div>
            <div class="menu"></div>

            <div class="circle"></div>
            <img class="logo_locate" src="../logo_MA.jfif">

            <p class="tittle_profile">PERFIL DE USUARIO</p>
            <hr>



            <div class="form-floating mb-3 nombre">

                <input type="text" id="nombre" class="elemento-para-leer form-control" name="nombre1" value="CASILLA PARA NOMBRE ">
                <label for="nombre">NOMBRE:</label>

            </div>
            <img alt="comienzo" class="start_img" id="start_nom" src="../imagenes/mic.gif">



            <div class="form-floating mb-3 apellido_p">

                <input type="text" id="apellido_p" name="apellido_p" value="casilla apellido paterno" class="elemento-para-leer form-control">

                <label for="apellido_p">Apellido
                    Paterno:</label>


            </div>
            <img alt="comienzo" class="start_img" id="start_ape_p" src="../imagenes/mic.gif">


            <div class="form-floating mb-3 fecha_nacimiento">


                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" class="elemento-para-leer form-control">

                <label for="fecha_nacimiento">Fecha de
                    Nacimiento:</label>

            </div>

            <div class="form-floating mb-3 apellido_m">

                <input type="text" id="apellido_m" name="apellido_m1" value="casilla apellido materno " class="elemento-para-leer form-control">

                <label for="apellido_m">Apellido
                    Materno:</label>


            </div>
            <img alt="comienzo" class="start_img" id="start_ape_m" src="../imagenes/mic.gif">


            <div class="form-floating mb-3 rut">


                <input type="text" id="rut" name="rut1" class="elemento-para-leer form-control" value="casilla rut " placeholder="ingresa tu rut ">

                <label for="rut"> INGRESE SU RUT
                </label>


            </div>
            <img alt="comienzo" class="start_img" id="start_rut" src="../imagenes/mic.gif">


            <div class="form-floating mb-3 region">

                <?php
                $sql1 = "select * from regiones";
                $result = mysqli_query($cnn, $sql1);
                ?>
                <select id="region" class="elemento-para-leer form-control" autocomplete="on" name="region">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value=" . $row['ID_REGION'] . ">" . $row['NOMBRE_REGION'] . "</option>";
                    }
                    ?>
                </select>
                <label for="region">Región:</label>




            </div>

            <div class="form-floating mb-3 ciudad">


                <?php
                $sql1 = "select * from ciudades";
                $result = mysqli_query($cnn, $sql1);
                ?>
                <select id="ciudad" class="form-control" name="ciudad">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value=" . $row['ID_CIUDAD'] . ">" . $row['NOMBRE_CIUDAD'] . "</option>";
                    }
                    ?>
                </select>
                <label for="ciudad">Ciudad:</label>


            </div>


            <div class="form-floating mb-3 direccion ancho">

                <input type="text" id="direccion" class="form-control" name="direccion_postulante" value="casilla direccion" class="elemento-para-leer form-control">

                <label for="direccion">Dirección del
                    Postulante:</label>

            </div>
            <img alt="comienzo" class="start_img" id="start_direccion" src="../imagenes/mic.gif">


            <div class="form-floating mb-3 telefono ancho">

                <input type="tel" id="telefono" class="form-control" name="telefono" class="elemento-para-leer form-control" value="casilla telefono">

                <label for="telefono">Teléfono:</label>



            </div>
            <img alt="comienzo" class="start_img" id="start_telefono" src="../imagenes/mic.gif">



            <div class="form-floating mb-3 email ancho">

                <input type="email" id="email" class="elemento-para-leer form-control" value="casilla email" name="email" autocomplete="on">

                <label for="email">email:</label>

            </div>
            <img alt="comienzo" class="start_img" id="start_email" src="../imagenes/mic.gif">



            <div class="form-floating mb-3 contrasena">

                <input type="password" id="contrasena" class="elemento-para-leer form-control" value="casilla contraseña" name="contrasena1">

                <label for="contrasena">Contraseña:</label>


            </div>
            <img alt="comienzo" class="start_img" id="start_contrasena" src="../imagenes/mic.gif">

            <div class="form-floating mb-3 rep_contrasena">

                <input type="password" class="elemento-para-leer form-control" value="casilla repetir contraseña" id="rep_contrasena" name="rep_contrasena1" placeholder="Confirmar Contraseña">

                <label for="rep_contrasena">Confirmar Contraseña</label>


            </div>
            <img alt="comienzo" class="start_img" id="start_rep_contrasena" src="../imagenes/mic.gif">

            <input id="documento" name="documento" type="file" accept="image/*" onchange="handleInputChange(event)">
            <div class="regis_button">

                <button type="submit" class="btn btn-primary regis_button elemento-para-leer" id="reg_btn" name="reg_btn">Ingresar</button>
            </div>

            <div class="cancel_regis">
                <a href="../index_MA/index.html"><button type="button" class="btn btn-secondary cancel_regis elemento-para-leer" id="cancel_reg" name="cancel_reg">Cancelar</button></a>
            </div>
            <div>

                <button id="act-des_btn" class="elemento-para-leer">Desactivar Voz</button>
            </div>


            <div id="error-pass" style="color: red;"></div>
            <div>
                <p class="error"></p>
            </div>


            <div id="fondo_ord"></div>


        </div>

    </form>

    <script type="text/javascript" src="main.js"></script>
    <script src="Registrar.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var synth = window.speechSynthesis;
            var vozActual = null;
            var act_des = document.getElementById('act-des_btn');
            var vozActivada = true; // La lectura está activada por defecto

            act_des.addEventListener('click', function() {
                if (vozActivada) {
                    detenerLectura();
                    vozActivada = false;
                    act_des.textContent = 'Activar lectura de texto';
                } else {
                    vozActivada = true;
                    act_des.textContent = 'Desactivar lectura de texto';
                    leerTexto(document.querySelector('.elemento-para-leer'));
                }
            });

            var elementosParaLeer = document.querySelectorAll('.elemento-para-leer');

            elementosParaLeer.forEach(function(elemento) {
                elemento.addEventListener('mouseover', function() {
                    detenerLectura();
                    if (vozActivada) {
                        leerTexto(elemento);
                    }
                });
            });

            // Activar la lectura al cargar la página
            if (vozActivada) {
                leerTexto(document.querySelector('.elemento-para-leer'));
            }





            function leerTexto(elemento) {
                var texto = obtenerTextoElemento(elemento);

                if ('speechSynthesis' in window) {
                    vozActual = new SpeechSynthesisUtterance(texto);
                    synth.speak(vozActual);
                } else {
                    alert('La síntesis de voz no es compatible con este navegador.');
                }
            }

            function detenerLectura() {
                if (vozActual !== null) {
                    synth.cancel();
                    vozActual = null;
                }
            }

            function obtenerTextoElemento(elemento) {
                if (elemento.tagName.toLowerCase() === 'input') {
                    return elemento.value;
                } else {
                    return elemento.innerText;
                }
            }
        });
    </script>

</body>


</html>