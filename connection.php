<?php
function connection() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "users_crud_php";

    $conexion = mysqli_connect($host, $user, $pass, $db);
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    return $conexion;
}
?>