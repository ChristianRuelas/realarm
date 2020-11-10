<!DOCTYPE html>
<html lang="es">
<head>
<script src="js/index.js" ></script>
<link rel="stylesheet" href="css/index.css">
    <meta charset="UTF-8">
    <title>Realarm</title>
</head>
<body>
    <div class="bsup" id="uno">
        <img src="img/Logo.png" alt="Realarm Alarm System" class="Logo">
        <label class="titulo1">Sistema de Alarma Moderno</label>
        <input type="button" value="Descargas" class="btndescargas " id="btdescargas" onclick="des()">
        <input type="button" value="Registro" class="btnregistro" id="btregistro" onclick="window.location='registro.php'">
        <input type="button" value="Login" class="btnlogin" id="btlogin" onclick="window.location='login.php'">
    </div>
    <div class="bder" id="dos">
        <input type="button" value="Comprar" class="btncomprar" onclick="window.location='compra.php'">
        <input type="button" value="WhatsApp" class="btnwhats" onclick="window.open('https://api.whatsapp.com/send?phone=526565884891&text=Hola%20que%20tal%20quisiera%20mas%20informacion%20hacerca%20de%20Realarm&fbclid=IwAR3EnA3XvNJqY9n6Ky6hblUV4OPgDov7h50dsPHyBoSIS7qaCVPN0A6-H7I')">
        <p class="contacto">
            Numeros de contacto: <br>
            (656)-123-4567 <br>
            (656)-123-7890 <br><br>
            Correo: <br><br>
            <p class="corr">shryshrox.punx@hotmail.com</p>
        </p>

    </div>
    <DIV class="bac" id="tres">

    </DIV>
    <div class="dcontenido" id="cuatro">
        <h1 class="tituloc">Que es Relarm?</h1>
        <h2 style="color: black;">Sistema de seguridad </h2>
        <img src="img/dispositivo.jpg" alt="dispocitivo">
        <p class="parrafop">Sabemos que el hogar es algo que nos cuesta mucho en esta vida ya que  le dedicamos mucho tiempo y es 
            donde vivimos el dia a dia, tambien sabemos  que siempre lo primero es "La seguridad", 
            en estos tiempos el robo a  casas habitacion a incrementado en todo el mundo y eso nos leva a tomar medidas 
            de seguridad, pero , eso es lo dificil 
            muchos optan por poner otros tipos de cerraduras  u otros tipos de puertas reforsadas, pero eso nos lleva mucho dinero 
            en Realarm pensamos en tus bolsillos y creamos un sistema de seguridad  el cual puedes usar para estar  
            alerta de tu hogar y saber en que momento se habren las puertas. te ofrecemos desde lo mas basico que es un sistema de alarma 
            con un sensor magnetico para cada puerta, y ademas incluira un boton de panico para en caso de algun percanse. 
            El sistema de seguridad Realarm es un dispositivo que monitorea el estado  de las puertas de tu casa por medio de sensores
            magneticos que se activan cuando alguien entra y sale de tu hogar. Usando tecnologia moderna como lo son las nuevas 
            tecnologias de IoT (El internet de las cosas) logramos hacer un dispocitivo capas de alertar de varias formas cuando se activen sus sensores 
            desde una notificacion a tu aplicacion de telefono hasta un sms a tu telefono. <br>

        <img class="ard" src="img/arduino.png" alt="Arduino"><p class="parrafop">
            Utilizamos tecnologia Arduino en nuestros productos lo que les da mas rendimiento y mas urabilidad a un precio accesible
            Arduino es un fabricante de tecnologias de IoT que ha crecido bastante en estos Utilizamos
            años, si quieres saber mas de estas tecnologias visita el siguiente link <a href="https://www.arduino.cc/">Pagina oficial de Arduino</a>
        </p>

    </p>

    </div>
    <div class="desc" id="descargas">
        <input class="btn third" type="button" value="Aplicacion de escritorio"> 
        <img class="descimg1" src="img/windows.png" alt="windows">
        <input class="btn third" type="button" value="Aplicacion Movil"><br><br>
        <img class="descimg2" src="img/android.png" alt="Android">
        <input class="btn first" type="button" value="Regresar" onclick="(recup())" >

    </div>
    
</body>
</html>