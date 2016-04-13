<?php 
if (!isset($_SESSION)) {
  session_start();
}
	

    $hostname_conexion = "db620985971.db.1and1.com";
	$database_conexion = "db620985971";
	$username_conexion = "dbo620985971";
	$password_conexion = "agentemd";


//$hostname_conexion = "localhost";
//$database_conexion = "TecnoRollo_News";
//$username_conexion = "root";
//$password_conexion = "";
	$conexion = mysql_pconnect($hostname_conexion, $username_conexion, $password_conexion) or trigger_error(mysql_error(),E_USER_ERROR); 
	
	include('inc/funciones.php');



?>