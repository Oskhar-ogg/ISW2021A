<?php
session_start();
if ((isset($_SESSION['sesionUsuario']) && $_SESSION['sesionUsuario']['cargo'] == "Encargado de Soporte") || (isset($_SESSION['sesionUsuario']) && $_SESSION['sesionUsuario']['cargo'] == "Jefe de Servicios Computacionales")) {
    $usuario = $_SESSION['sesionUsuario'];
    //header("Location:../inicio/index.php");
}else {
    include 'cerrar_sesion.php';
    header("Location:../sesion/loginuds.php");   
}
?>