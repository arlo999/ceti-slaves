<?php require_once('conexion.php'); 




$accion_user=sprintf("SELECT * FROM z_users WHERE id_empresa=%s AND estado=%s",
    formatearcadena($_POST['id'],'text'),
	formatearcadena('aceptado','text'));


$consulta_user=mysqli_query($conexion,$accion_user);
$cantidad_user=mysqli_num_rows($consulta_user);



if($cantidad_user==0){
echo "error";
}else{


$userData = array();

while($row=mysqli_fetch_assoc($consulta_user)){
  
      $userData['centros'][] = $row;
 
}

echo json_encode($userData);


}
mysqli_free_result($consulta_user);


?>