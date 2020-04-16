<?php require_once('conexion.php'); 



$pass = trim($_POST['pass']);
$email = trim($_POST['email']);

if(!isset($pass) || $pass=='' || $email=='') exit;



$accion_login=sprintf("SELECT * FROM z_users WHERE email=%s AND pass=%s AND estado!=%s",
	formatearcadena($_POST['email'],'text'),
    formatearcadena($_POST['pass'],'text'),
	formatearcadena('revision','text'));

$consulta_login=mysqli_query($conexion,$accion_login);
$datos_login=mysqli_fetch_assoc($consulta_login);
$cantidad_login=mysqli_num_rows($consulta_login);

if($cantidad_login==1){
	echo 'success';
}
mysqli_free_result($consulta_login);


?>