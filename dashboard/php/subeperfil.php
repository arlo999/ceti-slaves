<?php require_once('conexion.php');


$milisegundos = round(microtime(true) * 1000);

$extension = explode('/', $_FILES['fotoperfil']['type']);
$nombreimagen=$_POST['idenfoto'].$milisegundos.'.'.$extension[1];
	

	move_uploaded_file($_FILES['fotoperfil']['tmp_name'], '../perfiles/'.$nombreimagen);

	

	$accion_postulacionuser = sprintf("UPDATE z_users SET fotoperfil=%s WHERE id=%s",
	formatearcadena($nombreimagen,'text'),
    formatearcadena($_POST['idenfoto'],'int'));
$consulta_postulacionuser = mysqli_query($conexion,$accion_postulacionuser) or die(mysqli_error());




	echo $nombreimagen;