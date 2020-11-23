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
   <script src="js/jquery-3.5.1.js"></script>
    <title>Realarm</title>
    <script>
      /*function alarma(){
          var alarmac=$.ajax({
              url: 'php/encenderapagar.php',
              dataType:'text',
              async:false
          }).responseText;
         alert(alarmac);
         

      }
      setInterval(alarma,5000);*/

    </script>
</head>
<body>
    <div class="user" id="userr">
        <audio id="alarma" src="audio/Alarma Efecto de Sonido.mp3" preload="auto" loop></audio>
        <img class="logo" src="img/Logo.png" alt="Logo">
        <p class="Nuser"  ><?php echo($_SESSION['Ruser']);?></p>
        <input class="Csesion" type="button" value="Cerrar secion" onclick="Csesion()">
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
        <input class="btn btn-two" type="button" value="Tiempo de actividad" onclick="direccionar('tiempoact')">
       <input class="btn btn-two" type="button" value="Estado" onclick="direccionar('estado')">
       <input class="btn btn-two" type="button" value="Sensor activado" onclick="direccionar('sensoract')">
       <input class="btn btn-two" type="button" value="Boton activado" onclick="direccionar('btnpress')">
    </form>
   </div>
   <iframe id="ffr" name="frameR" class="frameR" src="php/realarmver.php" frameborder="0"></iframe>
    
</body>
</html>