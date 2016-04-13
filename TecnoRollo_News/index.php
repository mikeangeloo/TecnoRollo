<?php require_once ('conexion.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title><?php echo $dato['1'] ?></title>
<link rel="shortcut icon" type="image/x-icon" href="img/ramh.ico" />
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
<?php include('inc/listado.php'); ?>
</div>


<?php include('inc/footer.php'); ?>


<?php if (!isset($_SESSION['iduser'])) include('inc/flotante.php'); ?>


</body>
</html>