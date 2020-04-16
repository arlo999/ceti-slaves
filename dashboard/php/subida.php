<?php 


require_once('conexion.php'); 




  
$milisegundos = round(microtime(true) * 1000);

$extension = explode('/', $_FILES['ine_usuario']['type']);
$extension2 = explode('/', $_FILES['cv_usuario']['type']);
$nombre=$milisegundos.'.'.$extension[1];
$nombrecv=$milisegundos.'.'.$extension2[1];






	move_uploaded_file($_FILES['ine_usuario']['tmp_name'], '../ines/'.$nombre);
	move_uploaded_file($_FILES['cv_usuario']['tmp_name'], '../cvs/'.$nombrecv);
	
	
	//ACTUALIZAR REGISTRO
$subir_usuario = sprintf("INSERT INTO z_users (nombre, apellido_p, apellido_m, email, direccion, numero_ext,numero_int, cp , pass, ine, cv,entidad_federativa, latitud, longitud) 
VALUES (%s,%s,%s, %s, %s, %s, %s,%s,%s,%s,%s,%s,%s,%s)",
formatearcadena($_POST['nombre_usuario'],'text'),
formatearcadena($_POST['nombreP_usuario'],'text'),
formatearcadena($_POST['nombreM_usuario'],'text'),
formatearcadena($_POST['mail_usuario'],'text'),
formatearcadena($_POST['direccion_usuario'],'text'),
formatearcadena($_POST['nExt_usuario'],'int'),
formatearcadena($_POST['nInt_usuario'],'int'),
formatearcadena($_POST['cp_usuario'],'int'),
formatearcadena($_POST['contra_usuario'],'text'),
formatearcadena($nombre,'text'),
formatearcadena($nombrecv, 'text'),
formatearcadena($_POST['estado_usuarios'],'text'),
formatearcadena($_POST['latitud'],'double'),
formatearcadena($_POST['longitud'],'double'));
$consulta_subiravatar = mysqli_query($conexion,$subir_usuario) or die(mysqli_error());


echo "success";



?>