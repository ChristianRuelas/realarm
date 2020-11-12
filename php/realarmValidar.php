<?php
require_once('../vendor/autoload.php');

$serie= $_GET["txtSerie"];
$pass=$_GET["txtPass"];

$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');

if ($client) {
    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->find([
        'dispositivo.serie'=>$serie,
    ]);
    foreach($userDatabaseFind as $userFind) {
        $storedUsername = $userFind['pass'];
        
    }
    if( $pass == $storedUsername){ 
       
        ?>
        
        <script type="text/javascript">
   
        alert("usuario si existe");
        </script> <?php
        echo($storedUsername.$storedPassword);
        
    }else{
        
        echo("no existe el usuario");
        sleep(10);
        header('Location: ../login.php');
    }



  
}else {
die("Mongo DB no inicio");
}

?>
