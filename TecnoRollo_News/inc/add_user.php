<?php require_once ('../conexion.php');


//CONSULTA BASE DATOS
    mysql_select_db($database_conexion, $conexion);
    $query_DatosRegistro = sprintf("SELECT user FROM z_users WHERE user=%s",
	 GetSQLValueString($_POST['user'], "text"));
	 
    $DatosRegistro = mysql_query($query_DatosRegistro, $conexion) or die(mysql_error());
    $row_DatosRegistro = mysql_fetch_assoc($DatosRegistro);
    $totalRows_DatosRegistro = mysql_num_rows($DatosRegistro);
    
    


if ($totalRows_DatosRegistro==0){
//Insertar registro
$insertSQL = sprintf("INSERT INTO z_users (user, password) VALUES (%s, %s)",
                       GetSQLValueString($_POST['user'], "text"),
                       GetSQLValueString(md5($_POST['pass']), "text"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());
  
  echo 'correcto';
}
else {
	echo 'incorrecto';
	}


mysql_free_result($DatosRegistro);

?>