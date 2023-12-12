<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nuevo.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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


        <hr>
        <nav class="tittle_profile">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Perfil de Usuario</a></li>
                <li><a href="#">Ofertas de Empleo</a></li>
                <li><a href="#">Contáctanos</a></li>
                <li><a href="#">Quiénes Somos</a></li>
            </ul>
        </nav>
    </header>
    <br><br>
    <section>
        <?php
        include("listado.php");
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
            publicaciones.REGION ,
            publicaciones.EMPRESA,
            ciudades.NOMBRE_CIUDAD,
            ciudades.ID_CIUDAD, 
            regiones.ID_REGION,
            regiones.NOMBRE_REGION,
            empresa.NOMBRE_EMPRESA
        FROM 
            publicaciones
        JOIN
            ciudades ON publicaciones.CIUDAD = ciudades.ID_CIUDAD
        JOIN
            regiones ON ciudades.REGION = regiones.ID_REGION
            JOIN
            empresa ON regiones.ID_REGION = publicaciones.REGION;
        
        ";


            $result = mysqli_query($cnn, $sql1);
            ?>

            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<div class='publicacion'>";
                echo "<h3 id='empresa'>Empresa: " . $row['NOMBRE_EMPRESA'] . "</h3>";
                echo "<p >Descripción: " . $row['DESCRIPCION'] . "</p>";
                echo "<p >Región: " . $row['NOMBRE_REGION'] . "</p>";
                echo "<p>Ciudad: " . $row['NOMBRE_CIUDAD'] . "</p>";
                echo "<p >Número de Vacantes: " . $row['NUMERO_VACANTES'] . "</p>";
                echo "</div>";
                // Agrega más campos según sea necesario
            }
            ?>




        </div>
    </section>


    <!-- Sección de contacto con enlaces a redes sociales -->
    <footer class="contacto">
        <h2>Contacto</h2>
        <div class="redes-sociales">
            <img src="../imagenes/facebook.jpg" alt="Facebook">
            <img src="../imagenes/whastsapp.png" alt="Whastsapp">
            <!-- Agrega más imágenes para otras redes sociales -->
        </div>
    </footer>
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ddd0d042;
            color: #828282;
        }

        header {
            background-color: #3da92f;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav li {
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
        }

        .publicaciones {
            margin: 20px;
        }

        .publicacion {
            background-color: #67ccf4;
            padding: 10px;
            margin-bottom: 10px;
            width: 50%;



        }

        .contacto {
            background-color: #000000;
            padding: 20px;
            text-align: center;
        }

        .redes-sociales img {
            width: 30px;
            margin: 0 10px;
        }

        h2 {
            color: #f2f2f2;

        }

        .tittle_profile {
            color: #ffffff;
            position: absolute;
            top: 1%;
            left: 9%;
            font-size: 24px;
        }
    </style> -->


</body>

</html>