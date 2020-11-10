<?php
require_once('../vendor/autoload.php');

$serie= $_POST["txtSerie"];
$pass=$_POST["txtPass"];

$client = new MongoDB\Client('mongodb+srv://christian_realarm:rugc930730@christian0.nvkym.mongodb.net/Realarm?retryWrites=true&w=majority');

if ($client) {
    $db = $client->Realarm->usuarios;
    $userDatabaseFind = $db->find(array('serie' => $serie,'pass'=> $pass));
    foreach($userDatabaseFind as $userFind) {
        $storedUsername = $userFind['serie'];
        $storedPassword = $userFind['pass'];
    }
    if($serie == $storedUsername && $pass == $storedPassword){ 
        $_SESSION['authentication'] = 1;
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



   /* $qry = array("serie" => $serie,"password" => $pass);
    $result = $db->find(['serie'=>$serie,'pass'=>$pass]);
    if($result){
    echo "<script> alert('si existe la cuenta')</script>";
    sleep(10);
    //header("Location: ../Realarm.php");
    echo($result);
    }else{

 } */
}else {
die("Mongo DB no inicio");
}

?>
<script>
alert(<?php $result['serie'] ?>);
window.location="admin.php";
</script>