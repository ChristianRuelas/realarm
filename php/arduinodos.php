<?php
require_once('../vendor/autoload.php');
$serie=$_GET['Rserie'];
$tiempo=$_GET['Rtiempo'];


$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');
if ($client) {
    $db = $client->Realarm->usuarios;

    
   
    $userDatabaseFind=$db->updateOne(
        ['serie' => $serie],
        ['$set' => ['tiempoact' => $tiempo]]);


  
  
}else {
die("Mongo DB no inicio");
}
?>