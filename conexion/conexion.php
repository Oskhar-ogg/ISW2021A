<?php
$conexion = mysqli_connect("mysql.face.ubiobio.cl","g1ieci2021","g1ieci2021a","g1bd2021");
if ($conexion->connect_error) {
    die("Conexion fallida: ". $conn->connect_error);
}
mysqli_set_charset($conexion,"utf8");
?>
