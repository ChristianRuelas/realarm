<?php
require_once('../vendor/autoload.php');

$serie= $_POST["txtSerie"];
$pass=$_POST["txtPass"];

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
        ?>
        
        <script type="text/javascript">
   
        alert("usuario no existe");
        </script> <?php
       
    }



  
}else {
die("Mongo DB no inicio");
}

?>
