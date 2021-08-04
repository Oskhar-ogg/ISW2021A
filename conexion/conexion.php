<?php
$mysqli = mysqli_connect("mysql.face.ubiobio.cl","g1ieci2021","g1ieci2021a","g1bd2021");
if (!$mysqli) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    exit;
}
mysqli_set_charset($mysqli,"utf8");
?>
