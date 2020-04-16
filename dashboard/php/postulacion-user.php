<?php require_once('conexion.php'); 

$id=$_POST['id'];
$idcentro=$_POST['idcentro'];
$idempresa=$_POST['idempresa'];

$accion_postulacionuser = "UPDATE z_users SET estado='proceso' WHERE id=$id";
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());

$accion_postulacionuser = "UPDATE z_users SET id_centro='$idcentro' WHERE id=$id";
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());

$accion_postulacionuser = "UPDATE z_users SET id_empresa='$idempresa' WHERE id=$id";
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());




echo "success";






?>