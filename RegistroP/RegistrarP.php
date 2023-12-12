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
        include("bba/listado.php");
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
                <img alt="comienzo" class="start_img" id="start_nom" src="../imagenes/mic.gif">

            </div>



            <div class="form-floating mb-3 apellido_p">

                <input type="text" id="apellido_p" name="apellido_p" value="casilla apellido paterno" class="elemento-para-leer form-control">

                <label for="apellido_p">Apellido
                    Paterno:</label>

                <img alt="comienzo" class="start_img" id="start_ape_p" src="../imagenes/mic.gif">

            </div>


            <div class="form-floating mb-3 fecha_nacimiento">


                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" class="elemento-para-leer form-control">

                <label for="fecha_nacimiento">Fecha de
                    Nacimiento:</label>

            </div>

            <div class="form-floating mb-3 apellido_m">

                <input type="text" id="apellido_m" name="apellido_m1" value="casilla apellido materno " class="elemento-para-leer form-control">

                <label for="apellido_m">Apellido
                    Materno:</label>

                <img alt="comienzo" class="start_img" id="start_ape_m" src="../imagenes/mic.gif">

            </div>


            <div class="form-floating mb-3 rut">


                <input type="text" id="rut" name="rut1" class="elemento-para-leer form-control" value="casilla rut " placeholder="ingresa tu rut ">

                <label for="rut"> INGRESE SU RUT
                </label>

                <img alt="comienzo" class="start_img" id="start_rut" src="../imagenes/mic.gif">

            </div>


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

                <img alt="comienzo" class="start_img" id="start_direccion" src="../imagenes/mic.gif">
            </div>


            <div class="form-floating mb-3 telefono ancho">

                <input type="tel" id="telefono" class="form-control" name="telefono" class="elemento-para-leer form-control" value="casilla telefono">

                <label for="telefono">Teléfono:</label>


                <img alt="comienzo" class="start_img" id="start_telefono" src="../imagenes/mic.gif">

            </div>



            <div class="form-floating mb-3 email ancho">

                <input type="email" id="email" class="elemento-para-leer form-control" value="casilla email" name="email" autocomplete="on">

                <label for="email">email:</label>

                <!-- <img alt="comienzo" class="start_img" id="start_email" src="../imagenes/mic.gif"> -->
            </div>



            <div class="form-floating mb-3 contrasena">

                <input type="password" id="contrasena" class="elemento-para-leer form-control" value="casilla contraseña" name="contrasena1">

                <label for="contrasena">Contraseña:</label>


                <img alt="comienzo" class="start_img" id="start_contrasena" src="../imagenes/mic.gif">
            </div>

            <div class="form-floating mb-3 rep_contrasena">

                <input type="password" class="elemento-para-leer form-control" value="casilla repetir contraseña" id="rep_contrasena" name="rep_contrasena1" placeholder="Confirmar Contraseña">

                <label for="rep_contrasena">Confirmar Contraseña</label>

                <img alt="comienzo" class="start_img" id="start_rep_contrasena" src="../imagenes/mic.gif">

            </div>

            <div class="documento">
                <input id="documento" name="documento" type="file" accept="image/*" onchange="handleInputChange(event)">

            </div>

            <div class="regis_button">
                <button type="submit" class="btn btn-primary regis_button elemento-para-leer" id="reg_btn" name="reg_btn">Ingresar</button>
            </div>

            <div class="cancel_regis">
                <a href="../index_MA/index.html"><button type="button" class="btn btn-secondary cancel_regis elemento-para-leer" id="cancel_reg" name="cancel_reg">Cancelar</button></a>
            </div>

            <div>

                <button id="act-des_btn" class="elemento-para-leer btn btn-primary desactivar ">Desactivar Voz</button>
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
    <!-- <style>
        /* Contiene el diseño para la foto de perfil y el botón de cambiar foto */
        .photo_user {
            position: absolute;
            width: 130px;
            height: 130px;
            top: 18%;
            right: 33%;
            ;
            display: flex;
            flex-direction: column;
            /* Cambiar la dirección del flujo a vertical */
            align-items: center;
            /* Centrado horizontal */
            justify-content: center;
            /* Centrado vertical */
            margin-left: auto;
            /* Mover todo el contenido hacia la derecha */
        }

        #contenedorPerfil {
            position: relative;
            width: 100%;
            height: 100%;
        }

        #imagenPerfil {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #000;
        }

        #photo_button {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            /* Color de fondo con opacidad */
            border-radius: 50%;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            /* Inicialmente, invisible */
            transition: opacity 0.3s;
            /* Transición de opacidad */
        }

        #iconoMas {
            font-size: 40px;
        }

        .photo_user:hover #photo_button {
            opacity: 1;
            /* Hace visible el botón al pasar el cursor */
        }

        #photo_profile {
            display: none;
        }

        /* Aquí está el codigo css del cuadrado de fondo gris */
        /* Contiene z-index: -1 para indicar que esté debajo de los que contengan z-index: 1 */
        #fondo_ord {
            position: absolute;
            top: 8%;
            right: 20.3%;
            width: 57.5%;
            /* Ancho del cuadro */
            height: 101%;
            /* Altura del cuadro */
            background-color: #f0f0f0;
            /* Color de fondo del cuadro */
            /* border: 2px solid #000; Borde del cuadro */
            border-radius: 10px;
            z-index: -1;
        }

        /* Esto es para indicar que el cuadrado gris de fondo esté de bajo de los objetos que contengan z-index: 1  */
        #contenido {
            position: relative;
            z-index: 1;
        }

        /* Marca el ancho de las cajas de texto */
        .ancho {
            width: 45%;
            /*Cambia el ancho de la caja de texto*/
        }

        /* Cambia el diseño del texto "Ingresa Tu Informacion Personal" */
        h1 {
            position: absolute;
            top: 10%;
            left: 27%;
        }

        /* Cambia el diseño del texto "Información Personal" */
        h3 {
            position: absolute;
            top: 33%;
            left: 57%;
        }

        /* Cambia el diseño del texto "PERFIL DE USUARIO" */
        .tittle_profile {
            color: #ffffff;
            position: absolute;
            top: 1%;
            left: 9%;
            font-size: 24px;
        }

        /* Cambia el diseño del circulo que está como fondo en el logo */
        .circle {
            position: absolute;
            top: -1%;
            left: -0.4%;
            width: 100px;
            /* Ancho del círculo */
            height: 100px;
            /* Alto del círculo */
            background-color: #000000;
            /* Color de fondo del círculo */
            border-radius: 50%;
            /* Hace que el elemento sea un círculo */
        }

        /* Cambia el tamaño del logo */
        .logo_locate {
            position: absolute;
            top: -1%;
            left: -0.4%;
            width: 100px;
            /* Ancho deseado de la imagen */
            height: auto;
            /* Altura automática para mantener la proporción */
            border-radius: 50%;
            /* Hace que la imagen sea redonda */
        }

        /* Cambia el diseño del texto "Foto de Perfíl" */
        .text_profile {
            position: relative;
            top: 75%;
            right: 150%;
        }

        /* Genera una linea (Es meramente diseño estetico) */
        hr {
            position: absolute;
            top: 14%;
            right: 27%;
            border: none;
            height: 3px;
            background-color: #000;
            margin: 10px 0;
            width: 45%;
            /* Ajustar el ancho de la línea */
        }

        .menu {
            position: absolute;
            top: 0%;
            right: 0%;
            border: none;
            height: 40px;
            background-color: #000;
            margin: 10px 0;
            width: 100%;
            /* Ajustar el ancho de la línea */
            border-radius: 10px;
        }

        /* Cambia el diseño de la caja de texto "Nombre" */
        .nombre {
            position: absolute;
            top: 20%;
            left: 28.7%;
            width: 22%;

            border: 2px solid #000;
            border-radius: 10px;
        }

        /* Cambia el diseño de la caja de numerica "Edad" */
        /* .regis_edad{
    position: absolute;
    top: 292px;
    left: 54.8%;
    width: 18.8%; Cambia el ancho de la caja de texto
    border: 2px solid #000;
    border-radius: 10px;
} */

        /* Cambia el diseño de la caja de texto "Apellido Paterno" */
        .apellido_p {
            position: absolute;
            top: 354px;
            left: 28.7%;
            width: 22%;
            /*Cambia el ancho de la caja de texto*/
            border: 2px solid #000;
            border-radius: 10px;
        }

        /* Cambie el diseño de la caja de "Fecha de Nacimiento" */
        .fecha_nacimiento {
            position: absolute;
            top: 200px;
            left: 51.7%;
            width: 22%;
            /*Cambia el ancho de la caja de texto*/
            border: 2px solid #000;
            border-radius: 10px;
        }

        /* Cambia el diseño de la caja de texto "Apellido Materno" */
        .apellido_m {
            position: absolute;
            top: 280px;
            left: 28.7%;
            width: 22%;
            /*Cambia el ancho de la caja de texto*/
            border: 2px solid #000;
            border-radius: 10px;
        }

        /* Cambia el diseño de la caja de texto "Rut" */
        .rut {
            position: absolute;
            top: -35px;
            left: 28.7%;
            width: 22%;
            /*Cambia el ancho de la caja de texto*/
            border: 2px solid #000;
            border-radius: 10px;
        }

        /* Cambia el diseño del Combo Box de "País" */
        .region {
            position: absolute;
            bottom: -45px;
            left: 51.7%;
            width: 22%;
            height: 61px;
            border: 2px solid #000;
            border-radius: 10px;
        }

        /* Cambia el diseño del Combo Box de "Ciudad" */
        .ciudad {
            position: absolute;
            bottom: -49px;
            left: 51.7%;
            width: 22%;
            height: 61px;
            border: 2px solid #000;
            border-radius: 10px;
        }

        /* Cambia el diseño de la caja de texto "Direccion" */
        .direccion {
            position: absolute;
            bottom: -49px;
            left: 28.7%;
            border: 2px solid #000;
            border-radius: 10px;
        }

        /* Cambia el diseño de la caja de texto "Telefono" */
        .telefono {
            position: absolute;
            bottom: -49px;
            left: 28.7%;
            border: 2px solid #000;
            border-radius: 10px;
        }

        /* Cambia el diseño de la caja de texto "Correo" */
        .email {
            position: absolute;
            bottom: -49px;
            left: 28.7%;
            border: 2px solid #000;
            border-radius: 10px;
        }

        #error-mail {
            position: absolute;
            bottom: 123px;
            left: 34%;
        }

        /* Cambia el diseño de la caja de texto "Contraseña" */
        .contrasena {
            position: absolute;
            bottom: -49px;
            left: 28.7%;
            width: 22%;
            /*Cambia el ancho de la caja de texto*/
            border: 2px solid #000;
            border-radius: 10px;
        }

        .rep_contrasena {
            position: absolute;
            bottom: 28px;
            left: 51.7%;
            width: 22%;
            /*Cambia el ancho de la caja de texto*/
            border: 2px solid #000;
            border-radius: 10px;
        }

        /* Cambia la posición del mensaje de error "Las contraseñas no coinciden */
        #error-pass {
            position: absolute;
            bottom: 15px;
            left: 53%;
        }

        /* Cambia el diseño del boton "Registrarse" */
        .regis_button {
            position: absolute;
            bottom: -7%;
            right: 35%;
            height: 60px;
        }

        /* Cambia la forma del boton "Registrarse" */
        .style_regis {
            width: 145%;
            /* Ancho del botón */
            height: 100%;
            /* Alto del botón */
            font-size: 20px;
            /* Tamaño de fuente del botón */
        }

        /* Cambia el diseño del boton "Cancelar" */
        .cancel_regis {
            position: absolute;
            bottom: -7%;
            left: 34.3%;
            height: 60px;
        }

        /* Cambia la forma del boton "Cancelar" */
        .style_cancel {
            width: 175%;
            /* Ancho del botón */
            height: 100%;
            /* Alto del botón */
            font-size: 20px;
            /* Tamaño de fuente del botón */
        }

        .img {
            margin: 18px;
            float: left;
            position: relative;

        }
    </style> -->

</body>


</html>