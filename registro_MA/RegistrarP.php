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

    <form id="formulario" class="p-3 m-0 border-0 bd-example">
        <div id="contenido">
            <?php
            include("listado.php");
            $cnn = Conectar();


            ?>

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


                <input type="text" id="nombre" name="nombre_postulante" class="form-control">
                <label for="nombre">Nombre del
                    Postulante:</label>
            </div>

            <div class="form-floating mb-3 apellido_p">


                <input type="text" id="apellido_p" name="apellido_p" class="form-control">
                <label for="apellido_p">Apellido
                    Paterno:</label>
            </div>

            <div class="form-floating mb-3 fecha_nacimiento">

                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" class="form-control">
                <label for="fecha_nacimiento">Fecha de
                    Nacimiento:</label>

            </div>

            <div class="form-floating mb-3 apellido_m">

                <input type="text" id="apellido_m" name="apellido_m" class="form-control">

                <label for="apellido_m">Apellido
                    Materno:</label>
            </div>

            <div class="form-floating mb-3 rut">


                <input type="text" id="rut" for="colFormLabel" class="form-control" name="rut" placeholder="ingresa tu rut ">
                <label for="rut"> INGRESE SU RUT
                </label>
            </div>

            <div class="form-floating mb-3 region">

                <?php
                $sql1 = "select * from regiones";
                $result = mysqli_query($cnn, $sql1);
                ?>
                <select id="region" autocomplete="on" name="region">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value=" . $row['ID_REGION'] . ">" . $row['NOMBRE_REGION'] . "</option>";
                    }
                    ?>
                </select>
                <label for="region">Región:</label>


            </div>

            <div class="form-floating mb-3 ciudad">
                <label for="ciudad" autocomplete="on">Ciudad:</label>

                <?php
                $sql1 = "select * from ciudades";
                $result = mysqli_query($cnn, $sql1);
                ?>
                <select id="ciudad" name="ciudad">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value=" . $row['ID_CIUDAD'] . ">" . $row['NOMBRE_CIUDAD'] . "</option>";
                    }
                    ?>
                </select>

            </div>



            <div class="form-floating mb-3 direccion ancho">

                <input type="text" id="direccion" name="direccion_postulante" class="form-control">

                <label for="direccion">Dirección del
                    Postulante:</label>
            </div>

            <div class="form-floating mb-3 telefono ancho">

                <input type="tel" id="telefono" name="telefono" class="form-control">
                <label for="telefono">Teléfono:</label>

            </div>


            <div class="form-floating mb-3 email ancho">


                <label for="email">email:</label>
                <input type="email" id="email" name="email" autocomplete="on">



            </div>


            <div class="form-floating mb-3 contrasena">

                <input type="password" id="contrasena" name="contrasena" class="form-control">
                <label for="contrasena">Contraseña:</label>

            </div>
            <div class="regis_button">

                <button type="submit" class="btn btn-primary style_regis" id="reg_btn" name="reg_btn">Ingresar</button>
            </div>

            <div class="cancel_regis">
                <a href="../index_MA/index.html"><button type="button" class="btn btn-secondary style_cancel" id="cancel_reg" name="cancel_reg">Cancelar</button></a>
            </div>


            <div id="error-pass" style="color: red;"></div>


            <div id="fondo_ord"></div>
        </div>

    </form>



    <script src="Registrar.js"></script>
</body>


</html>