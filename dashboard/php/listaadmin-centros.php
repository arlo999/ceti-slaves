<?php require_once('conexion.php'); 



$accion_user="SELECT * FROM z_centros";

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