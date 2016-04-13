<header class="encabezado">
<div id="logo"><a href="<?php echo "" ?>"><img src="<?php echo "" ?>img/icon.png" width="25%" height="auto"></a></div>
<div id="buscador">


<form onSubmit="return false" name="mibuscador">

<input type="text" name="textoescrito" id="textoescrito" value="" onKeyUp="buscador_ajax(textoescrito.value);">
<input type="submit" value="Buscar">
</form>
<div id="resultados" style="display:none"></div>

</div>
</header>