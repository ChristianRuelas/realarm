<?php
require_once('../vendor/autoload.php');
$serie=$_GET['Rserie'];


$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');
if ($client) {
    $db = $client->Realarm->usuarios;

    
    $userDatabaseFind=$db->findOne([
            'serie'=>$serie,
    ]);
    $cont=$userDatabaseFind['sensoract']+1;
    $userDatabaseFind=$db->updateOne(
        ['serie' => $serie],
        ['$set' => ['estado' => 'up','sensoract'=>$cont]]);


  
  
}else {
die("Mongo DB no inicio");
}
?>
