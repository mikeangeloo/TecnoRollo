<?php
require_once ('../conexion.php');
include_once "../processmessage2.php";

$mensaje=$_POST['notificacion'];


if(isset($_POST['notificacion'])) {
    $imgurl = "s";
    $greetMsg = "s";
    $respJson = '{"greetImgURL":"' . $imgurl . '","greetMsg":"' . $greetMsg . '"}';
    $registation_ids = array();

    $slq = mysql_query("select gcmregid from gcmusers");

    $contador = mysql_num_rows($slq);

    $contador2 = 0;

    for ($i = 0; $i < $contador; $i++) {
        $contador2++;
        $gcmRegId = $slq2 = mysql_query("select gcmregid from gcmusers where id='$contador2'");
        $row = mysql_fetch_assoc($gcmRegId);

        //Add RegIds retrieved from DB to $registration_ids
        array_push($registation_ids, $row['gcmregid']);


    }
    $contador2 = 0;
    // JSON Msg to be transmitted to selected Users
    $message = array("m" => $respJson);

    $pushsts = sendPushNotificationToGCM($registation_ids, $message);


//Subir imagen
    $nombre_imagen = $_FILES['imagen1']['name'];
    move_uploaded_file($_FILES['imagen1']['tmp_name'], "../img/upload/" . $nombre_imagen);

//Insertar registro
    $insertSQL = sprintf("INSERT INTO z_posts (titulo, mensaje, autor, imagen) VALUES (%s, %s, %s, %s)",
        GetSQLValueString($_POST['titulo'], "text"),
        GetSQLValueString($_POST['mensaje'], "text"),
        GetSQLValueString($_SESSION['iduser'], "int"),
        GetSQLValueString($nombre_imagen, "text"));

    mysql_select_db($database_conexion, $conexion);
    $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());

    if($Result1){
        ?>
        <script>
            alert("Post Activo");
            location.href="http://www.tecnorrollo.com/TecnoRollo_News";
        </script>
<?php
    }



}
?>



  
