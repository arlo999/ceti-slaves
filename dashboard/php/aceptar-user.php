<?php require_once('conexion.php'); 
$idcentro=$_POST['idcentro'];
$milisegundos = round(microtime(true) * 1000);
$iduser=$_POST['id'];

$accion_postulacionuser = "UPDATE z_users SET estado='aceptado' WHERE id=$iduser";
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());
$accion_postulacionuser = "UPDATE z_users SET fechainicio=$milisegundos WHERE id=$iduser";
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());



$accion_user=sprintf("SELECT * FROM z_centros WHERE id=%s",
	formatearcadena($_POST['idcentro'],'text'));

$consulta_user=mysqli_query($conexion,$accion_user);
$datos_user=mysqli_fetch_assoc($consulta_user);
$cantidad_user=mysqli_num_rows($consulta_user);

$vacantes=$datos_user['vacantes'];
$ocupantes=$datos_user['ocupantes'];

$ocupantes+=1;






$accion_postulacionuser = "UPDATE z_centros SET ocupantes=$ocupantes WHERE id=$idcentro";
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());


if($vacantes==$ocupantes){

$accion_postulacionuser = "UPDATE z_centros SET estado='completo' WHERE id=$idcentro";
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());
}


mysqli_free_result($consulta_user);





echo "success";






?>