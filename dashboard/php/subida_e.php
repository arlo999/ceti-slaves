<?php require_once('conexion.php');




$accion_center = sprintf("INSERT INTO z_empresas ( nombre, email, razon_social, rfc, direccion, numero_ext,numero_int, cp , pass) VALUES (%s,%s,%s, %s, %s, %s, %s,%s,%s)",
formatearcadena($_POST['nombre_empresa'],'text'),
formatearcadena($_POST['mail_empresa'],'text'),
formatearcadena($_POST['razon_empresa'],'text'),
formatearcadena($_POST['rfc'],'text'),
formatearcadena($_POST['direccion_empresa'],'text'),
formatearcadena($_POST['numeroExt_empresa'],'int'),
formatearcadena($_POST['numeroInt_empresa'],'int'),
formatearcadena($_POST['cp_empresa'],'int'),
formatearcadena($_POST['password_empresa'],'text'));



	
$consulta_center= mysqli_query($conexion,$accion_center) or die(mysqli_error());




echo "success";
?>