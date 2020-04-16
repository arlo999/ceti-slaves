<?php require_once('conexion.php');


$milisegundos = round(microtime(true) * 1000);

$extension = explode('/', $_FILES['fotoc']['type']);
$nombreimagen=$_POST['id_empresac'].$milisegundos.'.'.$extension[1];
	

	move_uploaded_file($_FILES['fotoc']['tmp_name'], '../centros/'.$nombreimagen);





$accion_center = sprintf("INSERT INTO z_centros (nombre, descripcion,direccion, numero_ext, numero_int, id_empresa, vacantes,imagen,skills,entidad_federativa,longitud,latitud) VALUES (%s,%s,%s, %s, %s, %s, %s,%s,%s, %s,%s,%s)",
		formatearcadena($_POST['nombrec'],'text'),
		formatearcadena($_POST['descripcionc'],'text'),
		formatearcadena($_POST['direccionc'],'text'),
		formatearcadena($_POST['direccion_extc'],'int'),
		formatearcadena($_POST['direccion_int'],'int'),
		formatearcadena($_POST['id_empresac'],'int'),
		formatearcadena($_POST['vacantesc'],'int'),
		formatearcadena($nombreimagen,'text'),
		formatearcadena($_POST['skills'],'text'),
		formatearcadena($_POST['estado'],'text'),
		formatearcadena($_POST['longitud'],'double'),
		formatearcadena($_POST['latitud'],'double'));

	$consulta_center= mysqli_query($conexion,$accion_center) or die(mysqli_error());





	
echo $consulta_center;
