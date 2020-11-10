<?php
require_once('../vendor/autoload.php');
$id=$_POST['id'];
$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');
if ($client) {
    $db = $client->Realarm->usuarios;

    $insertOneResult = $db->insertOne([
    'nombre' => $id,
    'apellido' => "ardu",
    'clave' => "ardu",
    'serie' => "ardu",
    'pass' => "ardu",
    
    ]);

  
  
}else {
die("Mongo DB no inicio");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php echo "hola" ?>
</body>
</html>