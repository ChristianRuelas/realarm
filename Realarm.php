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
   <link rel="icon" type="image/png" href="img/Logo.png">
   <script src="js/Realarm.js"></script>
   <script src="js/jquery-3.5.1.js"></script>
    <title>Realarm</title>
    <script>
    //ajax para ver si el estado inicial debe ser apagado o encendido
    function iniciar(){
    var state=$.ajax({
              url:'php/webstate.php',
              dataType:'text',
              async:false
          }).responseText;
          if(state=="1"){
            document.getElementById("estado").innerHTML="encendido";
          document.getElementById("edo").style.border="1px solid green";

          }else if(state=="2"){
            document.getElementById("estado").innerHTML="apagado";
          document.getElementById("edo").style.border="1px solid red";
          }
        }
        iniciar();
      function alarma(){
          // bucle para ver estado d alarma
          var alarmac=$.ajax({
              url: 'php/encenderapagar.php',
              dataType:'text',
              async:false
          }).responseText;
          if(alarmac=="1"){
              encender();
          }else if(alarmac=="2"){
              apagar();
          }else{
            alert("error de conexion");
          }
       }
      setInterval(alarma,10000);
      function apagaralar(){
          var resp=$.ajax({
              url:'php/apagaralarma.php',
              dataType:'text',
              async:false
          }).responseText;
          if(resp=="apagado"){
          //alert(resp);
          document.getElementById("estado").innerHTML="apagado";
          document.getElementById("edo").style.border="1px solid red";
          }else{
            alert(resp);
          }

      }
      function encenderalar(){
          var resp=$.ajax({
              url:'php/activaralarma.php',
              dataType:'text',
              async:false
          }).responseText;
          if(resp=="Alarma encendida"){
          //alert(resp);
          document.getElementById("estado").innerHTML="encendido";
          document.getElementById("edo").style.border="1px solid green";
        }else{
            alert(resp);
        }

      }
    </script>
</head>
<body>
    <div class="user" id="userr">
        <audio id="alarma" src="audio/Alarma Efecto de Sonido.mp3" preload="auto" loop></audio>
        <img class="logo" src="img/Logo.png" alt="Logo">
        <p class="Nuser"  ><?php echo($_SESSION['Ruser']);?></p>
        <input class="Csesion" type="button" value="Cerrar secion" onclick="Csesion()">
        <input class="Csesion2" type="button" value="Eliminar mi cuenta" onclick="eliminar()">
        <input class="Cpass" type="button" value="Cambiar contraseña" onclick="window.location='Cpass.php'">
    </div>
   <div class="encendido">
       <p class="pencendido">Control de Alarma</p>
      <img class="btnactivar"  src="img/encender.png" alt="encendido" onclick="encenderalar()">
      <img class="btnactivar" src="img/apagar.png" alt="apagar" onclick="apagaralar()">
   </div>
   <div class="estado" id="edo">
       <p id="estado" class="verestado"></p>
   </div>
   <div class="vereg" id="registro">
       <form name="forma" action="php/realarmver.php" method="POST" target="frameR">
           <input class="ocul" type="text" name="txto" id="txtoculto">
        <input class="btn btn-two" type="button" value="Tiempo de actividad" onclick="direccionar('tiempoact')">
       <input class="btn btn-two" type="button" value="Estado" onclick="direccionar('estado')">
       <input class="btn btn-two" type="button" value="Sensor activado" onclick="direccionar('sensoract')">
       <input class="btn btn-two" type="button" value="Veces alarma activada" onclick="direccionar('vecesact')">
    </form>
   </div>
   <iframe id="ffr" name="frameR" class="frameR" src="img/Logo.png" frameborder="0"></iframe>
    
</body>
</html>