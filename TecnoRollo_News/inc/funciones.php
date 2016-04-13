<?php //FORMATEO BASE DE DATOS
if (!function_exists("GetSQLValueString")) {
	function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
	{
	  if (PHP_VERSION < 6) {
		$theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
	  }
	
	  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
	
	  switch ($theType) {
		case "text":
		  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
		  break;    
		case "long":
		case "int":
		  $theValue = ($theValue != "") ? intval($theValue) : "NULL";
		  break;
		case "double":
		  $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
		  break;
		case "date":
		  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
		  break;
		case "defined":
		  $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
		  break;
	  }
	  return $theValue;
	}
}



//FORMATO DE CARACTERES
    header('Content-Type: text/html; charset=iso-8859-1');
	
//CONSULTA BASE DATOS
	mysql_select_db($database_conexion, $conexion);
	$query_DatosWeb = "SELECT * FROM z_datos";
	$DatosWeb = mysql_query($query_DatosWeb, $conexion) or die(mysql_error());
	$row_DatosWeb = mysql_fetch_assoc($DatosWeb);
	$totalRows_DatosWeb = mysql_num_rows($DatosWeb);
	
	$dato= array($row_DatosWeb['url'],$row_DatosWeb['titulo'],$row_DatosWeb['admin']);
	
	mysql_free_result($DatosWeb);
	

	

function nombre($iduser){
	
	 global $database_conexion, $conexion;
	
	mysql_select_db($database_conexion, $conexion);
	$query_DatosFuncion = sprintf("SELECT user FROM z_users WHERE id=%s",
	
		GetSQLValueString($iduser, "int"));
	
	
	
	
	$DatosFuncion = mysql_query($query_DatosFuncion, $conexion) or die(mysql_error());
	$row_DatosFuncion = mysql_fetch_assoc($DatosFuncion);
	$totalRows_DatosFuncion = mysql_num_rows($DatosFuncion);
	
	
    return $row_DatosFuncion['user'];
			
	
	mysql_free_result($DatosFuncion);
	
	
}

function recordarsesion($user,$pass){
	
	setcookie("usercookie", $user, time() + (365 * 24 * 60 * 60),"/"); 
	setcookie("passcookie", $pass, time() + (365 * 24 * 60 * 60),"/");
	
}

function insertUser($emailId, $gcmRegId) {
    // Insert user into database
    $result = mysql_query("INSERT INTO gcmusers (emailid,gcmregid) VALUES('$emailId','$gcmRegId')");
    if ($result) {
        return true;
    } else {
        return false;
    }
}



if (isset($_COOKIE['usercookie']) && isset($_COOKIE['passcookie']) && !isset($_SESSION['iduser'])) {
	
		mysql_select_db($database_conexion, $conexion);
	$query_DatosLogin = sprintf("SELECT * FROM z_users WHERE user=%s AND password=%s",
	
	
	GetSQLValueString($_COOKIE['usercookie'], "text"),
	GetSQLValueString($_COOKIE['passcookie'], "text"));
	
	
	
	
	$DatosLogin = mysql_query($query_DatosLogin, $conexion) or die(mysql_error());
	$row_DatosLogin = mysql_fetch_assoc($DatosLogin);
	$totalRows_DatosLogin = mysql_num_rows($DatosLogin);
	
	if ($totalRows_DatosLogin==1){
		$_SESSION['iduser']=$row_DatosLogin['id'];
		$_SESSION['nombreuser']=$row_DatosLogin['user'];
		} 

			
	
    mysql_free_result($DatosLogin);
}












?>