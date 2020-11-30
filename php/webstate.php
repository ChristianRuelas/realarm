<?php
session_start();
if (!isset($_SESSION['Ruser'])) {
    header('location: login.php');
}
$serie= $_['Rserie'];
require_once('../vendor/autoload.php');
$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');

if ($client) {
    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->find([
        'serie'=>$serie,
    ]);
    foreach($userDatabaseFind as $userFind) {
        $act=$userFind['activar'];
    }
    if($act=="1"){
        echo '1'; 
        
    }
    else if($act=="0"){
        echo'2';
    }
}else {
die("Mongo DB no inicio");
}

?>