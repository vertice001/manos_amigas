<?php
error_reporting(0);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
$cnn = mysqli_connect("localhost", "root", "", "datos_ma");

$rut = $_POST['rut'];
$foto_postulante = $_POST['foto_postulante']; // Asumí que hay un campo para la foto
$documento = $_POST["documento"];
$nombre = $_POST['nombre'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$direccion = $_POST['direccion'];
$region = $_POST['region'];
$ciudad = $_POST['ciudad'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$contraseña = $_POST['contraseña'];
$rep_contraseña = $_POST['rep_contraseña'];


if ($contraseña == $rep_contraseña) {
    // Consulta de inserción
    $insert = "INSERT INTO postulante (RUT_POSTULANTE,FOTO_POSTULANTE, DOCUMENTO, NOMBRE_POSTULANTE, APELLIDO_P, APELLIDO_M, FECHA_DE_NACIMIENTO, DIRECCION_POSTULANTE, REGION, CIUDAD, EMAIL, TELEFONO, CONTRASEÑA, ESTADO) 
    VALUES ('$rut','$foto_postulante','$documento', '$nombre', '$apellido_p', '$apellido_m', '$fecha_nacimiento', '$direccion', '$region', '$ciudad', '$email', '$telefono', '$contraseña', 'INACTIVO')";



    $result = mysqli_query($cnn, $insert);



    if ($result) {
        $response = array('status' => 'success', 'message' => 'Datos insertados correctamente');
    } else {
        $response = array('status' => 'error', 'message' => 'Error al insertar los datos: ' . mysqli_error($cnn));
    }

    echo json_encode($response);
} else {
    $response = array('status' => 'success', 'message' => 'contraseña no coinciden ');
    echo json_encode($response);
};
