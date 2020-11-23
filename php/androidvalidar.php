<?php
require_once('../vendor/autoload.php');
$serie=$_REQUEST['Rserie'];
$pass=$_REQUEST['Rpass'];

$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');

if ($client) {
    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->find([
        'serie'=>$serie,
    ]);
    foreach($userDatabaseFind as $userFind) {
        $storedUsername = $userFind['pass'];
        $username=$userFind['nombre']."  ".$userFind['apellido'];
        
    }
    if( password_verify($pass, $storedUsername)){ 
       
       echo('1');
       
        
    }else{
        echo('2');
        
    }



  
}else {
    echo('Error en conexion');
}




?>