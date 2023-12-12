<?php
error_reporting(0);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers:Content-Type");
$cnn = mysqli_connect("localhost", "root", "", "datos_ma");

$selct = mysqli_query($cnn, "select * from postulante");
while ($dat = mysqli_fetch_assoc($selct)) {
    $arr[] = $dat;
}
echo json_encode($arr);
