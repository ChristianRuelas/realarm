<?php
require_once('../vendor/autoload.php');//bibliotecas para mongo db
$nusuario= $_POST["txtName"];
$ausuario=$_POST["txtAp"];
$clave=$_POST["txtTel"];
$serie=$_POST["txtSerie"];
$pass=$_POST["txtPass"];
$encrypted = password_hash($pass,PASSWORD_DEFAULT);
$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');
if ($client) {
    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->findOne([
        'serie'=>$serie,
    ]);
   if(!$userDatabaseFind){//si el dispositivo no existe
    $insertOneResult = $db->insertOne([
        'nombre' => $nusuario,
        'apellido' => $ausuario,
        'serie'=>$serie,
        'vecesact'=>0,
        'clave'=>$clave,
        'sensoract'=>0,
        'tiempoact'=>0,
        'estado'=>'down',
        'activar'=>'0',
        'pass' => $encrypted,
    ]);
    $result = $db->find(['serie'=>$serie]);
    if($result){
    echo "<script> alert('se creo correctmente tu cuenta');window.location.href='../login.php';</script>";
    } 
  }else{// si el dispositivo ya existe
      echo "<script> alert('ya existe ese dispositivo');window.location.href='../registro.php';</script>";
  }
}else {
die("Mongo DB no inicio");
}
?>