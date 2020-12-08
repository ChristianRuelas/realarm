<!DOCTYPE html>
<html lang="es">
<head>
<script src="js/index.js" ></script>
<link rel="stylesheet" href="css/index.css">
<link rel="icon" type="image/png" href="img/Logo.png">
    <meta charset="UTF-8">
    <title>Realarm</title>
    
    <script>
        function nodisp(x){
            if(x=="Aplicacion de escritorio"){
                window.open('https://drive.google.com/file/d/16-yMSbJ3hIMR03nCoxcEWZFO99sKtjRa/view?usp=sharing', '_blank');
               // document.location.href = "https://drive.google.com/file/d/16-yMSbJ3hIMR03nCoxcEWZFO99sKtjRa/view?usp=sharing"
            }else{
            alert("producto aun no disponible al publico");}
        }
    </script>
</head>
<body oncopy="return false" onpaste="return false">
    <div class="bsup" id="uno">
        <img src="img/Logo.png" alt="Realarm Alarm System" class="Logo" wid>
        <label class="titulo1">Sistema de Alerta</label>
        <input type="button" value="Descargas" class="btndescargas " id="btdescargas" onclick="des()">
        <input type="button" value="Registro" class="btnregistro" id="btregistro" onclick="window.location='registro.php'">
        <input type="button" value="Login" class="btnlogin" id="btlogin" onclick="window.location='login.php'">
    </div>
    <div class="bder" id="dos">
        <input type="button" value="Comprar" class="btncomprar" onclick="window.location='compra.php'">
        <input type="button" value="WhatsApp" class="btnwhats" onclick="window.open('https://api.whatsapp.com/send?phone=526565884891&text=Hola%20que%20tal%20quisiera%20mas%20informacion%20hacerca%20de%20Realarm&fbclid=IwAR3EnA3XvNJqY9n6Ky6hblUV4OPgDov7h50dsPHyBoSIS7qaCVPN0A6-H7I')">
        <p class="contacto">
            Numeros de contacto: <br>
            (656)-588-4891 <br>
            (656)-588-4892 <br><br>
            Correos: <br><br>
            <p class="corr">shryshrox.punx@hotmail.com <br>al19210042@utcj.edu.mx</p>
        </p>

    </div>
    <DIV class="bac" id="tres">

    </DIV>
    <div class="dcontenido" id="cuatro">
        <h1 class="tituloc">Que es Relarm?</h1>
        <h2 style="color: black;">Sistema de seguridad </h2>
        <img src="img/1-775-0-1-2-800x800.jpg" alt="dispocitivo" width="500px" height="500px"  >
        <p class="parrafop">Realarm es un dispositivo sencillo que solo utiliza sensores magneticos y la tecnologia de Arduino
            lo que hace de esto un dispositivo relativamente barato y accesible para toda persona. Se puede instalar en cualquier lugar que requiera 
            tener seguridad, lo puede poner en su domicilio o en su negocio, o si bien prefiere le puede servir hasta para ver 
            quien abre las puertas del refrigerador o de algun cajon que requiera. <br>
            por medio de sensores magneticos tendra monitoreado el lugar y sabra cuando se abre una puerta mediante notificaciones en su celular 
            usando la aplicacion movil de Realarm o si lo prefiere contamos con la aplicacion de escritorio y la aplicacion web para un amplio monitoreo 
            de los sensores <br>
            <img src="img/sensor magnetico.jpg" alt="sensor de puerta">
            <br>
            Solo requiere de una conexion a la electricidad del hogar y una conexion a internet por medio de cable para solo instalar.
            Los sensores vienen on un pegamento para que sea facil la colocacion de estos y es resistente a cualquier superficie,
             el cable biene con un alcance de 2 metros del dipositivo hasta el sensor pero se puede alargar hasta no mas de 15 metros con un cable de
                mismo calibre. <br>
                <br> <br>

             <br>

        <img class="ard" src="img/arduino.png" alt="Arduino"><p class="parrafop">
            Utilizamos tecnologia Arduino en nuestros productos lo que les da mas rendimiento y mas urabilidad a un precio accesible
            Arduino es un fabricante de tecnologias de IoT que ha crecido bastante en estos Utilizamos
            años, si quieres saber mas de estas tecnologias visita el siguiente link <a href="https://www.arduino.cc/" target="BLANK">Pagina oficial de Arduino</a>
        </p>
        <br>
        <img src="img/raterillo.png" alt="">
        <p class="parrafop"> Por mas seguridad que pongas para que no ingresen ladrones ya sea en tu domicilio o en un negocio 
        los ladrones siempre se las van a ingeniar para ingresar por alguna puerta o alguna ventana 
        y habeces no podemos hacer nada para evitarlo pero lo que se puede hacer en caso de que los bloqueos
        que pongamos fallen es poner el sistema de alertas de Realarm como algo extra para que sepas si alguien entro o abrio la 
        puerta o ventana y atiendas de inmediato el problema <br><br>
        Un pequeño comic de como trabaja Realarm
    </p>
    <img src="img/realarm-highres.png" alt="descripcion" width="1000px" height="600px"><br>
    <a href="https://www.storyboardthat.com/es" target="BLANK">si quieres crear tus propios comic haz clic aqui</a>
    <p class="parrafop">
        Un ejemplo de como se ve el sensor colocado en la puerta
    </p>
    <img src="img/descarga.jpg" alt="">
    <p class="parrafop">
       Y como trabaja la aplicacion de Realarm.
       Bueno pues Realarm disponde de sus tres aplicaciones para mas comodidad <br>
       Aplicacion Web <br>
       Aplicacion Movil <br>
       <img src="img/celulofono.png" alt="App movil" height="600px"><br>
       Aplicacion de escritorio <br>
       Todas estas aplicaciones estaran conectadas a una base de datos la cual albergara
       el numero de serie de tu dispositivo y algunos otros datos. Las aplicaciones interactuaran con el 
       dispositivo mediante esta base. 
       No te preocupes por la informacion por que estara cifrada en la base de datos para evitar las filtraciones y los
       datos en ella no se pueden claramente por ejemplo en la siguiente imagen aparece
       como se ve una contraseña de 6 digitos cifrada
    
    </p>
    <img src="img/cifrado.png" alt="password cifrado">
    <p class="parrafop">
        y asi se veran varios datos asi que es seguro <br> <br><br>

        Las conexiones de el dispositivo solo seran 2 <br>
        un eliminador de corriente que vendra incluido en el paquete puede ser de plug normal o entrada usb D <br>
        y una coexion a internet por medio de cable
    </p>
    <img src="img/caja-para-arduino-uno-mega.jpg" alt="">
    <p class="parrafop">
       <br> En Realarm nos importa tu salud por eso nuestros dispositivos estan completamente
       desinfectados y empacados especialmente para asegurar tu salud y la de tu familia pero recuerda desinfectarlos de nuevo
       ya que en el envio puede ser diferente <br>
       No limpies la cubierta con cloro ya que este lo daña y manchara el plastico, use solo alcohol y un trapo de algodon

    </p>
    <img src="img/desinfecte.jpg" alt="desinfecte">
    <p class="parrafop">
        <br><br> Informacion sobre el covid 19 haz click en la imagen de abajo 
    </p>
    <a target="BLANK" href="https://www.who.int/es/emergencies/diseases/novel-coronavirus-2019/advice-for-public/q-a-coronaviruses"><img class="covid" src="img/covid.jpg" alt="informacion sobre el covid 19" width="1000px"></a>
    </p>

    </div>
    <div class="desc" id="descargas">
        <input class="btn third" type="button" value="Aplicacion de escritorio" onclick="nodisp(this.value)"> 
        <img class="descimg1" src="img/windows.png" alt="windows">
        <input class="btn third" type="button" value="Aplicacion Movil" onclick="nodisp(this.value)"><br><br>
        <img class="descimg2" src="img/android.png" alt="Android">
        <input class="btn first" type="button" value="Regresar" onclick="(recup())" >

    </div>
    
</body>
</html>