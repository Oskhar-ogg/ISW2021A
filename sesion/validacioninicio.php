<?php
session_start();
if(isset($_SESSION['sesionUsuario'])){
    header("Location:../inicio/index.php");
}
?>