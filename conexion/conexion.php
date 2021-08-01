<?php
// $mysqli = mysqli_connect("146.83.194.142", "grup3co", "bdgrup3co", "softbd3co");
$mysqli = mysqli_connect("localhost","root","","test");
if (!$mysqli) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    exit;
}
?>
