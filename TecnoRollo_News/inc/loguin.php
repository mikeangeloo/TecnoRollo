<?php require_once ('../conexion.php');

	
	
	
	
	mysql_select_db($database_conexion, $conexion);
	$query_DatosLogin = sprintf("SELECT * FROM z_users WHERE user=%s AND password=%s",
	
	
	GetSQLValueString($_POST['user'], "text"),
	GetSQLValueString(md5($_POST['pass']), "text"));
	
	
	
	
	$DatosLogin = mysql_query($query_DatosLogin, $conexion) or die(mysql_error());
	$row_DatosLogin = mysql_fetch_assoc($DatosLogin);
	$totalRows_DatosLogin = mysql_num_rows($DatosLogin);
	
	if ($totalRows_DatosLogin==1){
		$_SESSION['iduser']=$row_DatosLogin['id'];
		$_SESSION['nombreuser']=$row_DatosLogin['user'];
		echo 'yes';
		
		if ($_POST['recordar']=='on'){
			
			recordarsesion($row_DatosLogin['user'],$row_DatosLogin['password']);
			
			}
		
		
		
		} else {
			echo 'error';
			}

			
	
	mysql_free_result($DatosLogin);
?>