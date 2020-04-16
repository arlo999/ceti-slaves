<?php require_once('conexion.php'); 



$pass = trim($_POST['pass']);
$email = trim($_POST['email']);



$accion_user=sprintf("SELECT * FROM z_admins WHERE email=%s AND pass=%s",
	formatearcadena($_POST['email'],'text'),
    formatearcadena($_POST['pass'],'text'));

$consulta_user=mysqli_query($conexion,$accion_user);
$datos_user=mysqli_fetch_assoc($consulta_user);
$cantidad_user=mysqli_num_rows($consulta_user);

if($cantidad_user==1){


$user = new stdClass();
$user->nombre = $datos_user['nombre'];
$user->email = $datos_user['email'];
$user->email = $datos_user['pass'];

$json = json_encode($user);
echo $json;

}else{
echo "error";
}
mysqli_free_result($consulta_user);


?>