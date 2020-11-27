<?php
$serie=$_REQUEST["Rserie"];
$pass=$_REQUEST["Rpass"];//contrasenia actual
$pass2=$_REQUEST["Rpass2"];//nueva contrasenia
$encrypted = password_hash($pass2,PASSWORD_DEFAULT);
require_once('../vendor/autoload.php');
$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');
if ($client) {
    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->findOne([
        'serie'=>$serie,
    ]);
    $storedUsername = $userDatabaseFind['pass'];
    
    if(password_verify($pass, $storedUsername)){
        $userDatabaseFind=$db->updateOne(
            ['serie' => $serie],
            ['$set' => ['pass' => $encrypted]]
        );
        $resultado=$userDatabaseFind->getModifiedCount();
        if($resultado==1){
         echo 'usuario modificado';
        }
        else{
         echo 'no se pudo modificar';
        }
    }
}else {
    echo 'no hay conexion';
die("Mongo DB no inicio");
}


?>