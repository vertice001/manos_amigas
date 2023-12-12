<?php
function Conectar()
{
    // error_reporting(0);
    if (!($cnn = mysqli_connect("localhost", "root", ""))) {
        exit();
    }

    if (!mysqli_select_db($cnn, "datos_ma")) {
        exit();
    }
    return $cnn;
}
