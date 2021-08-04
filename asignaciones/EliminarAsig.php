<?php 

include("../conexion/conexion.php");
include("../asignaciones/asignaciones.php");


$Consulta_id_usuario = "SELECT id_usuario FROM usuario WHERE rut_usuario = 'Rut-Asignado'";

if (isset($_POST['submit']))
{
    
    $nueva_fecha = $_POST["Nueva_Fecha"];
    $id_equipo =$_POST["IDEQUIPO"];

    $query_eliminar_asignacion = mysqli_query($conexion," UPDATE `asignacion` SET `fecha_vencimiento` = '$nueva_fecha' WHERE `equipo_id_equipo` = '$id_equipo' ");

    echo "Fecha modificada!!.";
}
?>