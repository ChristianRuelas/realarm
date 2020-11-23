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
        
        
    }
    if($state=="up"){
        echo '1'; 
        
    }else if($state=="down"){
        echo'2';
        
    }



  
}else {
die("Mongo DB no inicio");
}

?>