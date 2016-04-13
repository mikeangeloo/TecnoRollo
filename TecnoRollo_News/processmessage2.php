<?php




//Generic php function to send GCM push notification
function sendPushNotificationToGCM($registation_ids, $message) {
    //Google cloud messaging GCM-API url
    $url = 'https://android.googleapis.com/gcm/send';
    $fields = array(
        'registration_ids' => $registation_ids,
        'data' => $message,
    );
    // Update your Google Cloud Messaging API Key
    if (!defined('GOOGLE_API_KEY')) {
        define("GOOGLE_API_KEY", "AIzaSyDCWvmtPYNp-9LGgtPB7TlecWEjpBAxnL4");
    }
    $headers = array(
        'Authorization: key=' . GOOGLE_API_KEY,
        'Content-Type: application/json'
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    if ($result === FALSE) {
        die('Curl failed: ' . curl_error($ch));
    }
    curl_close($ch);
    return $result;
}
?>

<?php
//include_once 'db_functions.php';
//$db = new DB_Functions();
//$selUsers = $_POST['sendmsg'];
//if(empty($selUsers))
//{
//    echo("You didn't select any users.");
//}
//else
//{
//
//    $userCount = count($selUsers);
//    $imgurl = "s";
//    $greetMsg = "s";
//    $respJson = '{"greetImgURL":"'.$imgurl.'","greetMsg":"'.$greetMsg.'"}';
//    $registation_ids = array();
//    for($i=0; $i < $userCount; $i++)
//    {
//        $gcmRegId = $db->getGCMRegID($selUsers[$i]);
//        $row = mysql_fetch_assoc($gcmRegId);
//        //Add RegIds retrieved from DB to $registration_ids
//        array_push($registation_ids, $row['gcmregid']);
//    }
//    // JSON Msg to be transmitted to selected Users
//    $message = array("m" => $respJson);
//    $pushsts = sendPushNotificationToGCM($registation_ids, $message);
//
//}
//
//?>


