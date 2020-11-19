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
</head>
<body>
    <div class="login-page">
        <img src="img/Logo.png" alt="Realarm Alarm System" class="Logo">
        <div class="form">
          <form name="form1" class="login-form" action="php/realarmCambioPass.php" method="POST">
             <label for="txtpa">Cambiar contraseña</label>
            <input name="txtpa" type="password" placeholder="Contraseña actual" required/>
            <input name="txtpn" type="password" placeholder="Nueva contraseña" require/>
            <input type="password" name="txtcs" placeholder="Clave secreta del dispositivo">
            <input value="Aplicar cambio"  type="submit" />
            <input value="Cancelar cambio" type="button" onclick="cancelar_cambio()"/>
            
          </form>
        </div>
      </div>
</body>
</html>