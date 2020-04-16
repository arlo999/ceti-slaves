<?php require_once('conexion.php'); 



$accion_user=sprintf("SELECT * FROM z_users WHERE id_empresa=%s AND estado=%s",
    formatearcadena($_POST['id'],'text'),
	formatearcadena('proceso','text'));

$consulta_user=mysqli_query($conexion,$accion_user);
$datos_user=mysqli_fetch_assoc($consulta_user);
$cantidad_user=mysqli_num_rows($consulta_user);

if($cantidad_user>=1){
/*
$user = new stdClass();
$user->id = $datos_user['id'];
$user->nombre = $datos_user['nombre'];
$user->apellido_p = $datos_user['apellido_p'];
$user->apellido_m = $datos_user['apellido_m'];
$user->email = $datos_user['email'];
$user->direccion = $datos_user['direccion'];
$user->numero_ext = $datos_user['numero_ext'];
$user->numero_int = $datos_user['numero_int'];
$user->cp = $datos_user['cp'];
$user->cv = $datos_user['cv'];

$json = json_encode($user);
echo $json;
*/
echo $cantidad_user;
}else{
echo "error";
}


mysqli_free_result($consulta_user);

?>