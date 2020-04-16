<?php require_once('conexion.php'); 



$pass = trim($_POST['pass']);
$email = trim($_POST['email']);



$accion_user=sprintf("SELECT * FROM z_empresas WHERE email=%s AND pass=%s",
	formatearcadena($_POST['email'],'text'),
    formatearcadena($_POST['pass'],'text'));

$consulta_user=mysqli_query($conexion,$accion_user);
$datos_user=mysqli_fetch_assoc($consulta_user);
$cantidad_user=mysqli_num_rows($consulta_user);

if($cantidad_user==1){


$user = new stdClass();
$user->id = $datos_user['id'];
$user->nombre = $datos_user['nombre'];
$user->razon_social = $datos_user['razon_social'];
$user->rfc = $datos_user['rfc'];
$user->email = $datos_user['email'];
$user->direccion = $datos_user['direccion'];
$user->numero_ext = $datos_user['numero_ext'];
$user->numero_int = $datos_user['numero_int'];
$user->cp = $datos_user['cp'];
$user->skills = $datos_user['skills'];

$json = json_encode($user);
echo $json;

}else{
echo "error";
}
mysqli_free_result($consulta_user);


?>