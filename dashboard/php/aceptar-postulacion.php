<?php


$accion_centro=sprintf("SELECT * FROM z_centros WHERE id=%s",
	formatearcadena($_POST['idcentro'],'text'));

$consulta_centro=mysqli_query($conexion,$accion_centro);
$datos_centro=mysqli_fetch_assoc($consulta_centro);
$cantidad_centro=mysqli_num_rows($consulta_centro);

 $datos_centro['vacantes'];
 $datos_centro['ocupantes'];


 $nohay= $datos_centro['vacantes'] - $datos_centro['ocupantes'];

 $nohay=$nohay-1;



 $accion_postulacionuser = "UPDATE z_centros SET ocupantes='$newocupantes' WHERE id=$idcentro";
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());


$accion_postulacionuser = "UPDATE z_centros SET vacantes='$nohay' WHERE id=$idcentro";
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());


if ($nohay==0 {
	$accion_postulacionuser = "UPDATE z_centros SET estado='completo' WHERE id=$idcentro";
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());
}







mysqli_free_result($consulta_centro);



?>