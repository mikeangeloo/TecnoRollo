<?php 

//CONSULTA BASE DATOS
    mysql_select_db($database_conexion, $conexion);
    $query_DatosPost = "SELECT * FROM z_posts ORDER BY id DESC";
    $DatosPost = mysql_query($query_DatosPost, $conexion) or die(mysql_error());
    $row_DatosPost = mysql_fetch_assoc($DatosPost);
    $totalRows_DatosPost = mysql_num_rows($DatosPost);
	
	
    
   

?>
<?php if ($totalRows_DatosPost!=0){?>
<?php do {?>
<div id="listado">

<?php if ($row_DatosPost['imagen'] !=''){?>
<img src="<?php echo "" ?>img/upload/<?php echo $row_DatosPost['imagen'] ?>" width="150" height="100" class="mi_miniatura">
<?php }?>

<a href="<?php echo "" ?>ver_post.php?id=<?php echo $row_DatosPost['id'] ?>"><h3><?php echo $row_DatosPost['titulo'];?></h3></a>

<span><?php $cortar=substr($row_DatosPost['mensaje'], 0, 305)."..."; echo $cortar;?></span><br>





<?php echo "Publicado por: ".nombre($row_DatosPost['autor']);?>


</div>
<?php } while ($row_DatosPost = mysql_fetch_assoc($DatosPost));?>
<?php } else echo 'No hay anuncios';?>


<?php  mysql_free_result($DatosPost);?>