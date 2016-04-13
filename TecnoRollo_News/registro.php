<?php require_once ('conexion.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title>Registro</title>
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


<div class="cuerpo">



<h2>Registro</h2>
<div id="registro_ok">
<form onSubmit="return false" name="formregistro">
Nombre:<br>
<input type="text" name="nombre_r" value="" class="mi_input"><br>
Contraseña:<br>
<input type="password" name="pass_r" value="" class="mi_input"><br>
Repetir contraseña:<br>
<input type="password" name="pass_r2" value="" class="mi_input"><br>
<div id="error" class="notificacion" style="display:none"></div>
<input type="submit" value="Registro" onClick="registro_ajax(nombre_r.value,pass_r.value,pass_r2.value);">


</form>
</div>
</div>


<?php include('inc/footer.php'); ?>


<?php if (!isset($_SESSION['iduser'])) include('inc/flotante.php'); ?>


</body>
</html>