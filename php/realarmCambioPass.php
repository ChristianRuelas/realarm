<?php
session_start();
if (!isset($_SESSION['Ruser'])) {
    header('location: login.php');
  } else {
    $user=$_SESSION['Ruser'];
  }
$pass=$_POST["txtpa"];
$npass=$_POST["txtpn"];
$secret=$_POST["txtcs"];


//header('location:../Realarm.php');
require_once('../vendor/autoload.php');
$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');

if ($client) {
    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->updateOne(
        ['nombre' => $user],
        ['$set' => ['pass' => $npass]]
    );
    $resultado=$userDatabaseFind->getModifiedCount();
    if($resultado==1){
      header('location:../Realarm.php');
    }
    else{
      ?>
        
      <script type="text/javascript">
 
      alert("se produjo un error no se cambio la contraseña");
      </script> <?php
      header('location:../Realarm.php');
    }
    /*if( $pass == $storedUsername){ 
       
        ?>
        
        <script type="text/javascript">
   
        alert("usuario si existe");
        </script> <?php
        $_SESSION['Ruser']=$username;
       header('location:../Realarm.php');
        
    }else{
        ?>
        
        <script type="text/javascript">
   
        alert("usuario no existe");
        </script> <?php

       header('location:../login.php');
    }*/



  
}else {
die("Mongo DB no inicio");
}


?>