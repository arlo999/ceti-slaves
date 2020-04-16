<?php require_once('conexion.php'); 

$idcentro=$_POST['idcentro'];

$accion_postulacionuser = "UPDATE z_centros SET estado='rechazado' WHERE id=$idcentro";
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());




echo "success";






?>