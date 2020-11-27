<?php
$serie=$_REQUEST['Rserie'];
$dato=$_REQUEST['Rdato'];
require_once('../vendor/autoload.php');
$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');
if ($client) {
    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->findOne([
        'serie'=>$serie,
    ]);
    echo($userDatabaseFind[$dato]);
}else {
die("Mongo DB no inicio");
}
?>