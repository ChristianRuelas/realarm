<?php
session_start();
if (!isset($_SESSION['Ruser'])) {
    header('location: login.php');
}
require_once('../vendor/autoload.php');

$serie= $_SESSION['Rserie'];


$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');

if ($client) {
    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->find([
        'serie'=>$serie,
    ]);
    foreach($userDatabaseFind as $userFind) {
        $state = $userFind['estado'];
        $act=$userFind['activar'];
        
        
    }
    if($state=="up"&&$act=="1"){
        echo '1'; 
        
    }else if($state=="down"&&$act=="1"){
        echo'2';
        
    }
    else if($state=="up"&&$act=="0"){
        echo'3';
    }
    else if($state=="down"&&$act=="0"){
        echo'3';
    }



  
}else {
die("Mongo DB no inicio");
}

?>