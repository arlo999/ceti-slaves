<?php require_once('conexion.php'); 

$iduser=$_POST['id'];

$accion_postulacionuser = "UPDATE z_users SET estado='rechazado' WHERE id=$iduser";
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());



echo "success";






?>