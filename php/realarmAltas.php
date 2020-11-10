<?php

require_once('../vendor/autoload.php');

$nusuario= $_POST["txtName"];
$ausuario=$_POST["txtAp"];
$clave=$_POST["txtTel"];
$serie=$_POST["txtSerie"];
$pass=$_POST["txtPass"];

$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');

if ($client) {
    $db = $client->Realarm->usuarios;

    $insertOneResult = $db->insertOne([
    'nombre' => $nusuario,
    'apellido' => $ausuario,
    'clave' => $clave,
    'serie' => $serie,
    'pass' => $pass,
    
    ]);

    //$qry = array("serie" => $serie,"password" => $pass);
    $result = $db->find(['serie'=>$serie]);
    if($result){
    echo "<script> alert('se creo correctmente tu cuenta')</script>";
    sleep(10);
    header("Location: ../login.php");
    } 
}else {
die("Mongo DB no inicio");
}





//printf("Se insertó %d documento(s)\n", $insertOneResult->getInsertedCount());



//var_dump($insertOneResult->getInsertedId());
?>