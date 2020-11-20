<?php
session_start();
$valor=$_POST['txto'];
$serie=$_SESSION['Rserie'];
if (!isset($_SESSION['Ruser'])) {
    header('location: login.php');
  } else {
    $user=$_SESSION['Ruser'];
  }
  
require_once('../vendor/autoload.php');
$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');
if ($client) {

    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->findOne([
        'dispositivo.btnpress'=>30,
    ]);
echo($userDatabaseFind['dispositivo.btnpress']);
    
    /*foreach($userDatabaseFind as $userFind) {
        $dato = $userFind[''];
        
    }

echo($dato);
echo($serie);*/


  
}else {
die("Mongo DB no inicio");
}










/*
try {
    $valor=$_POST['txto'];
} catch (\Throwable $th) {
   echo("error");
}

if(!isset($valor)){
    echo("<br> aun no hay acceso a la base de datos");
}else{
    echo($valor."<br> aun no hay acceso a la base de datos");
}*/





?>