<?php
require_once('../vendor/autoload.php');
$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');
if ($client) {
    $db = $client->Realarm->usuarios;

    $insertOneResult = $db->deleteMany([
    'pass' => "ardu",
    
    ]);

  
  
}else {
die("Mongo DB no inicio");
}



?>