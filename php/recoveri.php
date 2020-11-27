<?php
$serie=$_POST['txtPass'];
$clave=$_POST['txtPass2'];
$pas1=$_POST['txtPass3'];
$pas2=$_POST['txtPass4'];
$encrypted = password_hash($pas1,PASSWORD_DEFAULT);
if($pas1==$pas2){
    if($pas1.length<5){
        echo'<script type="text/javascript">
        alert("La contraseña debe tener al menos 6 caracteres");
        window.location.href="../recoverypass.php";
        </script>';
    }
}else{
    echo'<script type="text/javascript">
    alert("las contraseñas no coinciden");
    window.location.href="../recoverypass.php";
    </script>';
}
require_once('../vendor/autoload.php');
$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');

if ($client) {
    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->find([
        'serie'=>$serie,
    ]);
    foreach($userDatabaseFind as $userFind) {
        $storedUsername = $userFind['clave'];    
    }
    if( $clave == $storedUsername){ 
        $userDatabaseFind=$db->updateOne(
            ['serie' => $serie],
            ['$set' => ['pass' => $encrypted]]
        );
        $resultado=$userDatabaseFind->getModifiedCount();
        if($resultado==1){
            echo'<script type="text/javascript">
            alert("contraseña modificada, inicie sesion con su nueva contraseña");
            window.location.href="../login.php";
            </script>';
        } 
    }else{
        echo'<script type="text/javascript">
        alert("dispositivo no encontrado vuelva a intentarlo");
        window.location.href="../login.php";
        </script>';
        
    }
}else {
die("Mongo DB no inicio");
}
?>