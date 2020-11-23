<?php
session_start();
$valor=$_POST['txto'];
$serie=$_SESSION['Rserie'];
if (!isset($_SESSION['Ruser'])) {
    header('location: login.php');
  } else {
    $user=$_SESSION['Ruser'];
  }
  
require_once('../vendor/autoload.php');
$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');
if ($client) {

    $db = $client->Realarm->usuarios;
    $userDatabaseFind=$db->findOne([
        'serie'=>$serie,
    ]);
   
}else {
die("Mongo DB no inicio");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>datos</title>
    <link rel="stylesheet" href="../css/vver.css">
</head>
<body>
<p ><?php  echo($userDatabaseFind[$valor]);?></p>
    
</body>
</html>