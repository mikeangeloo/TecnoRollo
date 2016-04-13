<?php require_once ('conexion.php');

$idpost= $_GET['id'];

//CONSULTA BASE DATOS
    mysql_select_db($database_conexion, $conexion);
    $query_DatosVer = "SELECT * FROM z_posts WHERE id='$idpost' ";
    $DatosVer = mysql_query($query_DatosVer, $conexion) or die(mysql_error());
    $row_DatosVer = mysql_fetch_assoc($DatosVer);
    $totalRows_DatosVer = mysql_num_rows($DatosVer);
	
	

?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title><?php echo $row_DatosVer['titulo'] ?></title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/efectos.js"></script>
</head>

<body>

<?php if (!isset($_COOKIE['galleta'])){?>
<div id="cookies">Este sitio web utiliza cookies para mejorar su navegación <a onClick="set_cookie('yes');" class="cursor">Aceptar</a></div>
<?php }?>

<?php include('inc/header.php'); ?>


<?php include('inc/menu.php'); ?>


<div class="cuerpo2">
<h1><?php echo $row_DatosVer['titulo'] ?></h1>
<?php echo $row_DatosVer['mensaje'] ?><br>
<?php echo nombre($row_DatosVer['autor']) ?>
</div>


<?php include('inc/footer.php'); ?>


<?php if (!isset($_SESSION['iduser'])) include('inc/flotante.php'); ?>


</body>
</html>
 <?php mysql_free_result($DatosVer);?>