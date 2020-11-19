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
   <link rel="stylesheet" href="css/Realarm.css">
   <script src="js/Realarm.js"></script>
    <title>Realarm</title>
    <script>
      

    </script>
</head>
<body>
    <div class="user" id="userr">
        <audio id="alarma" src="audio/Alarma Efecto de Sonido.mp3" preload="auto" loop></audio>
        <img class="logo" src="img/Logo.png" alt="Logo">
        <p class="Nuser"><?php echo $user;?></p>
        <input class="Csesion" type="button" value="Cerrar secion" onclick="<?php session_destroy();?>,Csesion()">
        <input class="Cpass" type="button" value="Cambiar contraseña" onclick="window.location='Cpass.php'">
    </div>
   <div class="encendido">
       <p class="pencendido">Control de Alarma</p>
      <img class="btnactivar"  src="img/encender.png" alt="encendido" onclick="encender()">
      <img class="btnactivar" src="img/apagar.png" alt="apagar" onclick="apagar()">
   </div>
   <div class="estado" id="edo">
       <p id="estado" class="verestado"><script>apagar();</script></p>
   </div>
   <div class="vereg" id="registro">
       <form name="forma" action="php/realarmver.php" method="POST" target="frameR">
           <input class="ocul" type="text" name="txto" id="txtoculto">
        <input class="btn btn-two" type="button" value="Tiempo de actividad" onclick="direccionar(this.value)">
       <input class="btn btn-two" type="button" value="Estado" onclick="direccionar(this.value)">
       <input class="btn btn-two" type="button" value="Sensor activado" onclick="direccionar(this.value)">
       <input class="btn btn-two" type="button" value="Boton activado" onclick="direccionar(this.value)">
    </form>
   </div>
   <iframe id="ffr" name="frameR" class="frameR" src="php/realarmver.php" frameborder="0"></iframe>
    
</body>
</html>