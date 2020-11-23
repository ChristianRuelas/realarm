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
          <form name="form1" class="login-form" action="php/recoveri.php" method="POST">
             <label for="txtPass">Recuperar contraseña</label>
            <input name="txtPass" type="password" placeholder="Serie del dispositivo">
            <input name="txtPass2" type="password" placeholder="Clave del dispositivo">
            <input name="txtPass3" type="password" placeholder="Contraseña Nueva">
            <input name="txtPass4" type="password" placeholder="Vuelva a introducir la nueva contraseña">
            <input value="Recuperar"  type="button" onclick="submit()"/>
            <input value="Regresar a la pagina principal" type="button" onclick="regprin()"/>
            <input type="button" value="Quiero registrarme" onclick="ireg()">
            <p class="message">El numero de serie lo puedes encontrar en la etiqueta en la caja
                de tu dispositivo al igual la clave secreta</p>
          </form>
        </div>
      </div>
</body>
</html>