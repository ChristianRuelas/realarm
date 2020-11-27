<?php
session_start();
if (!isset($_SESSION['Ruser'])) {
    header('location: login.php');
  } else {
    $user=$_SESSION['Ruser'];
  }
  $serie=$_SESSION['Rserie'];
$pass=$_POST["txtpa"];
$npass=$_POST["txtpn"];
$encrypted = password_hash($npass,PASSWORD_DEFAULT);
require_once('../vendor/autoload.php');
$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');

if ($client) {
    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->updateOne(
        ['serie' => $serie],
        ['$set' => ['pass' => $encrypted]]
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
}else {
die("Mongo DB no inicio");
}


?>