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
        ['$set' => ['estado' => 'down']]
    );
    $userDatabaseFind2=$db->updateOne(
        ['serie' => $serie],
        ['$set' => ['activar' => '0']]
    );
    $resultado=$userDatabaseFind2->getModifiedCount();
    if($resultado==1){
      
      echo 'apagado';
    }
    else{
     echo 'problemas en servidor';
    }

  
  
}else {
die("Mongo DB no inicio");
}



?>