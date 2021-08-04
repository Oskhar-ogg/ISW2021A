<?php 

include("../conexion/conexion.php");
include("../inicio/asignaciones.php");

$Consulta_id_usuario = "SELECT id_usuario FROM usuario WHERE rut_usuario = '#Rut-Asignado'";

if (isset($_POST['submit']))
{
    
    $fecha_inicio = $_POST["Fecha-Inicio"];
    $fecha_fin = $_POST["Fecha-Fin"];
    $rut_encargado =$_POST["Rut-encargado"];
    $id_usuario = $_POST[$Consulta_id_usuario];
    $id_equipo =$_POST["ID_equipo_s"];
    $query_insertar_asignacion = mysqli_query($conexion,"INSERT INTO `asignacion`(`fecha_inicio`, `fecha_vencimiento`, `encargado_rut_encargado`, `usuario_id_usuario`, `equpo_id_equipo`) VALUES ('$fecha_inicio','$fecha_fin','$rut_encargado','$id_usuario','$id_equipo')");

    echo "Asignacion lista!!.";
}
?>