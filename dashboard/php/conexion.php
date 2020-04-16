<?php 

//mantener sesision activa
if(!isset($_SESSION)) session_start();
//CONEXIÓN A LA BASE DE DATOS
$hostname_db = "proyectosinformaticatnl.ceti.mx";
$database_db = "pestenegra";
$username_db = "pestenegra";
$password_db = "97ea84166";
//Conectar a la base de datos
$conexion = mysqli_connect($hostname_db, $username_db, $password_db);
//Seleccionar la base de datos
mysqli_select_db($conexion,$database_db) or die ("Ninguna DB seleccionada");


include('funciones.php');


 ?>