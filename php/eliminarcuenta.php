<?php
session_start();
if (!isset($_SESSION['Ruser'])) {
    header('location: login.php');
}else{
    $serie=$_SESSION['Rserie'];
}
require_once('../vendor/autoload.php');
$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');
if ($client) {
    $db = $client->Realarm->usuarios;
    $deleteResult = $db->deleteMany([
        'serie' => $serie,
    ]);
    $resultado=$deleteResult->getDeletedCount();
if ($resultado>=1) {
   echo "<script> alert('Se elimino correctmente tu cuenta');window.location.href='../login.php';</script>";
}else{
    echo "<script> alert('No se pudo eliminar tu cuenta');window.location.href='../Realarm.php';</script>";
}


  
}else {
die("Mongo DB no inicio");
}

?>