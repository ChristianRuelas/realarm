<?php
session_start();
require_once('../vendor/autoload.php');

$serie= $_POST["txtSerie"];
$pass=$_POST["txtPass"];

$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');

if ($client) {
    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->find([
        'serie'=>$serie,
    ]);
    foreach($userDatabaseFind as $userFind) {
        $storedUsername = $userFind['pass'];
        $username=$userFind['nombre'];
        
    }
    if( password_verify($pass, $storedUsername)){ 
       
       
        $_SESSION['Ruser']=$username;
        $_SESSION['Rserie']=$serie;
       header('location:../Realarm.php');
        
    }else{
        echo'<script type="text/javascript">
        alert("usuario o contraseña invalidos");
        window.location.href="../login.php";
        </script>';
        
    }



  
}else {
die("Mongo DB no inicio");
}

?>
