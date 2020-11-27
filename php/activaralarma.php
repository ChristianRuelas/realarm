<?php
session_start();
if (!isset($_SESSION['Ruser'])) {
    header('location: login.php');
  }
$serie=$_SESSION['Rserie'];
require_once('../vendor/autoload.php');
$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');
if ($client) {
    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->updateOne(
        ['serie' => $serie],
        ['$set' => ['activar' => '1']]
    );
    $resultado=$userDatabaseFind->getModifiedCount();
    if($resultado==1){
        $userDatabaseFind2=$db->find([
            'serie'=>$serie,
        ]);
        foreach($userDatabaseFind2 as $userFind) {
            $act = $userFind['vecesact'];    
        }
        $act2=$act+1;
        $userDatabaseFind=$db->updateOne(
            ['serie' => $serie],
            ['$set' => ['vecesact' => $act2]]
        );
      echo 'Alarma encendida';
    }
    else{
     echo 'problemas en servidor';
    }
}else {
die("Mongo DB no inicio");
}



?>