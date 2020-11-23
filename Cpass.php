<?php
session_start();
if (!isset($_SESSION['Ruser'])) {
    header('location: login.php');
  } else {
    $user=$_SESSION['Ruser'];
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reg.css">
    <script src="js/index.js"></script>
    <title>CambiarPassword</title>
    <script>
      function cambiarp(){
        if(document.formita.txtpn.value==document.formita.txtcs.value){
          if(document.formita.txtpn.value!=""){
            document.formita.submit();
          }else{
            alert("la nueva contraseña esta vacia");
          }
         
        }
        else{
          alert("no coincide la contraseña nueva");
        }
    
}
    </script>
</head>
<body>
    <div class="login-page">
        <img src="img/Logo.png" alt="Realarm Alarm System" class="Logo">
        <div class="form">
          <form name="formita" class="login-form" action="php/realarmCambioPass.php" method="POST">
             <label for="txtpa">Cambiar contraseña</label>
            <input name="txtpa" type="password"  placeholder="Contraseña actual" required/>
            <input name="txtpn" type="password" placeholder="Nueva contraseña" required/>
            <input type="password" name="txtcs" placeholder="Repita la nueva contraseña" required/>
            <input value="Aplicar cambio"  type="button" onclick="cambiarp()">
            <input value="Cancelar cambio" type="button" onclick="cancelar_cambio()"/>
            
          </form>
        </div>
      </div>
</body>
</html>