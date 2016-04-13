<nav class="menu">
<a href="<?php echo $dato['0'] ?>"><li class="item_m">Inicio</li></a>
<li class="item_m">Posts</li>
<li class="item_m">Contacto</li>

<?php if (isset($_SESSION['iduser'])){?>
<a href="<?php echo $dato['0'] ?>agregar.php"><li class="item_m">Agregar</li></a>
<?php }?>
<?php if (!isset($_SESSION['iduser'])){?>
<a onClick="ventanas(1);" class="cursor"><li class="item_l">Iniciar sesi&oacute;n</li></a>



<a href="registro.php"><li class="item_l">Registrarse</li></a>



<?php } else {?>
<a href="inc/cerrar.php?cerrar=yes"><li class="item_l">X</li></a>
<li class="item_l"><?php echo $_SESSION['nombreuser'] ?></li>
<?php }?>

</nav>