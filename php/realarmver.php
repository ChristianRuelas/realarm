<?php
try {
    $valor=$_POST['txto'];
} catch (\Throwable $th) {
   echo("error");
}

if(!isset($valor)){
    echo("<br> aun no hay acceso a la base de datos");
}else{
    echo($valor."<br> aun no hay acceso a la base de datos");
}





?>