<?php require_once ('../conexion.php');
//setear cookie 1 mes
setcookie("galleta", $_POST['valor'], time() + (30 * 24 * 60 * 60),"/");
?>