<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reg.css">
    <script src="js/index.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="login-page">
        <img src="img/Logo.png" alt="Realarm Alarm System" class="Logo">
        <div class="form">
          <form name="form1" class="login-form" action="php/realarmCambioPass.php" method="POST">
             <label for="txtSerie">Recuperar contraseña</label>
            <input name="txtPass" type="password" placeholder="contraseña actual">
            <input name="txtPass" type="password" placeholder="contraseña Nueva">
            <input name="txtPass" type="password" placeholder="clave secreta del dispositivo">
            <input value="Recuperar"  type="button" onclick="document.location='php/realarmValidar.php'"/>
            <input value="Regresar a la pagina principal" type="button" onclick="regprin()"/>
            <input type="button" value="Quiero registrarme" onclick="ireg()">
            <p class="message">El numero de serie lo puedes encontrar en la etiqueta en la caja
                de tu dispositivo al igual la clave secreta</p>
          </form>
        </div>
      </div>
</body>
</html>