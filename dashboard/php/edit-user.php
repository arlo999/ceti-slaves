<?php require_once('conexion.php');


	$accion_edituser = sprintf("UPDATE z_users SET nombre=%s WHERE id=%s",
	formatearcadena($_POST['nombre'],'text'),
    formatearcadena($_POST['id'],'int'));
$consulta_edituser = mysqli_query($conexion,$accion_edituser) or die(mysqli_error());

$accion_edituser = sprintf("UPDATE z_users SET apellido_p=%s WHERE id=%s",
	formatearcadena($_POST['apellido_p'],'text'),
    formatearcadena($_POST['id'],'int'));
$consulta_edituser = mysqli_query($conexion,$accion_edituser) or die(mysqli_error());

$accion_edituser = sprintf("UPDATE z_users SET apellido_m=%s WHERE id=%s",
	formatearcadena($_POST['apellido_m'],'text'),
    formatearcadena($_POST['id'],'int'));
$consulta_edituser = mysqli_query($conexion,$accion_edituser) or die(mysqli_error());


$accion_edituser = sprintf("UPDATE z_users SET skills=%s WHERE id=%s",
	formatearcadena($_POST['skills'],'text'),
    formatearcadena($_POST['id'],'int'));
$consulta_edituser = mysqli_query($conexion,$accion_edituser) or die(mysqli_error());

$accion_edituser = sprintf("UPDATE z_users SET email=%s WHERE id=%s",
	formatearcadena($_POST['email'],'text'),
    formatearcadena($_POST['id'],'int'));
$consulta_edituser = mysqli_query($conexion,$accion_edituser) or die(mysqli_error());

$accion_edituser = sprintf("UPDATE z_users SET pass=%s WHERE id=%s",
	formatearcadena($_POST['pass'],'text'),
    formatearcadena($_POST['id'],'int'));
$consulta_edituser = mysqli_query($conexion,$accion_edituser) or die(mysqli_error());




	echo 'success';