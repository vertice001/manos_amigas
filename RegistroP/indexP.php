<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexP.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>home postulante </title>
</head>

<body>

    <!-- Encabezado con logo y menú -->
    <header>
        <!-- <div class="logo">
            <img src="../default.png" alt="Logo">
        </div> -->


        <div class="menu"></div>

        <div class="circle"></div>
        <img class="logo_locate" src="../logo_MA.jfif">




        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Perfil </a></li>
            <li><a href="#">Ofertas</a></li>
            <li><a href="#">Contáctanos</a></li>
            <li><a href="#">Quiénes Somos</a></li>
        </ul>

    </header>
    <br><br>
    <section>
        <?php
        include("bba/listado.php");
        $cnn = Conectar();


        ?>

        <div>

            <?php
            $sql1 = "SELECT 
            publicaciones.ID_PUBLICACION,
            publicaciones.DESCRIPCION,
            publicaciones.NUMERO_VACANTES,
            publicaciones.FECHA_PUBLICACION,
            publicaciones.FECHA_EXPIRACION,
            publicaciones.CIUDAD as ciudad,
            publicaciones.REGION,
            publicaciones.EMPRESA,
            ciudades.NOMBRE_CIUDAD,
            ciudades.ID_CIUDAD, 
            regiones.ID_REGION,
            regiones.NOMBRE_REGION,
            empresa.RUT_EMPRESA,
            empresa.NOMBRE_EMPRESA
        FROM 
            publicaciones
        JOIN ciudades ON publicaciones.CIUDAD = ciudades.ID_CIUDAD
        JOIN regiones ON publicaciones.REGION = regiones.ID_REGION
        JOIN empresa ON publicaciones.EMPRESA = empresa.RUT_EMPRESA
        WHERE publicaciones.EMPRESA = empresa.RUT_EMPRESA
        
        ";


            $result = mysqli_query($cnn, $sql1);
            ?>

            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<div class='publicacion'>";
                echo "<h3 id='empresa'>Empresa: " . $row['NOMBRE_EMPRESA'] . "</h3>";
                echo "<p class='pa' >Descripción: " . $row['DESCRIPCION'] . "</p>";
                echo "<p class='pa' >Región: " . $row['NOMBRE_REGION'] . "</p>";
                echo "<p class='pa'>Ciudad: " . $row['NOMBRE_CIUDAD'] . "</p>";
                echo "<p class='pa'>Número de Vacantes: " . $row['NUMERO_VACANTES'] . "</p>";
                echo "</div>";
                // Agrega más campos según sea necesario
            }
            ?>




        </div>
    </section>


    <!-- Sección de contacto con enlaces a redes sociales -->
    <footer class="bg-light text-dark pt-5 pb-4 pie">

        <div class="row tet-center text text-md-start">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase nb-4 font-weight-bold text-primary">Nosotros</h5>
                <hr class="mb-4">
                <p>
                    Bienvenido a Manos Amigas , una entidad comprometida con la integración y la igualdad de oportunidades. Nuestra misión es construir un mundo laboral inclusivo, donde cada individuo, independientemente de sus habilidades, pueda alcanzar su máximo potencial. En nuestra búsqueda constante de inclusión, hemos desarrollado este sitio web exclusivo para personas con discapacidad.


                </p>



            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">dejanos ayudarte</h5>
                <hr class="mb-4">
                <p>
                    <a href="#" class="text-dark">capacitate</a>
                </p>
                <p>
                    <a href="#" class="text-dark">ayuda</a>
                </p>
                <p>
                    <a href="#" class="text-dark">comentarios </a>
                </p>

            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Contactenos </h5>
                <hr class="mb-4">

                <p>
                    <li class="fas fa-envelope me-3"></li> manos.amigas@gmail.com
                </p>
                <p>
                    <li class="fas fa-phone me-3"></li> +56962650798
                </p>
                <p>
                    <li class="fas fa-print me-3"></li> 123123
                </p>
            </div>
            <hr class="mb-4">
            <div class="text-center mb-2">
                <p>
                    copyright todos los derechos reservados
                    <a href="#">
                        <strong class="text-prymary">Manos/Amigas+</strong>
                    </a>
                </p>

            </div>


            <div class="text-center">
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="text-dark"> <i class="fab fa-facebook"></i></a>

                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-dark"> <i class="fab fa-twitter"></i></a>

                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-dark"> <i class="fab fa-youtube"></i></a>

                    </li>
                    <li class="list-inline-item ">
                        <a href="#" class="text-dark"> <i class="fab fa-whatsapp"></i></a>

                    </li>
                </ul>


            </div>

        </div>
    </footer>





</body>

</html>