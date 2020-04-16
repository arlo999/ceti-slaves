<?php require_once('conexion.php'); 





$accion_user=sprintf("SELECT * FROM z_centros WHERE id=%s",
	formatearcadena($_POST['idcentro'],'text'));

$consulta_user=mysqli_query($conexion,$accion_user);
$datos_user=mysqli_fetch_assoc($consulta_user);
$cantidad_user=mysqli_num_rows($consulta_user);

if($cantidad_user==1){


$user = new stdClass();
$user->id = $datos_user['id'];
$user->nombre = $datos_user['nombre'];
$user->direccion = $datos_user['direccion'];
$user->numero_ext = $datos_user['numero_ext'];
$user->numero_int = $datos_user['numero_int'];
$user->imagen = $datos_user['imagen'];
$user->skills = $datos_user['skills'];
$user->longitud = $datos_user['longitud'];
$user->latitud = $datos_user['latitud'];
$user->estado = $datos_user['estado'];
$user->entidad_federativa = $datos_user['entidad_federativa'];

$json = json_encode($user);
echo $json;

}else{
echo "error";
}
mysqli_free_result($consulta_user);


?>