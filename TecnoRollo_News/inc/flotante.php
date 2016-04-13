<div id="cogebox" style="display:none">
<div id="flotantelogin">
<a onClick="ventanas(2);" class="cursor"><span class="derecha">X</span></a>



<form onSubmit="return false" id="formularioLoguin">
Usuario<br>
<input type="text" name="user" id="user" class="mi_input"><br>
Contrase&ntilde;a<br>
<input type="password" name="pass" id="pass" class="mi_input"><br>
<input type="checkbox" id="chekar" name="chekar" value=""> Recordar sesion?<br><br>
<div id="error2" class="notificacion" style="display:none"></div>
<input type="submit" id="miboton" value="Iniciar" class="cursor" onClick="login_ajax(user.value,pass.value);"><br>

</form>


</div>
<div id="fondonegro"></div>
</div>