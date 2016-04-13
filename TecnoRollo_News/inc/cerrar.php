<?php require_once ('../conexion.php');
//CERRAR SESION
if ((isset($_GET['cerrar'])) &&($_GET['cerrar']=="yes")){
	  //to fully log out a visitor we need to clear the session varialbles
	  $_SESSION['iduser'] = NULL;
	  $_SESSION['nombreuser'] = NULL;
	  unset($_SESSION['iduser']);
	  unset($_SESSION['nombreuser']);
	  
	  setcookie("usercookie", "", time() + (365 * 24 * 60 * 60),"/"); 
	  setcookie("passcookie", "", time() + (365 * 24 * 60 * 60),"/");
	
		
	  $logoutGoTo = $dato['0'];
	  
	   header("Location: $logoutGoTo");
	   exit;
  
}
?>