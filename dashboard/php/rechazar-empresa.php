<?php require_once('conexion.php'); 

$idempresa=$_POST['idempresa'];

$accion_postulacionuser = "UPDATE z_empresas SET estado='rechazado' WHERE id=$idempresa";
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());



echo "success";






?>