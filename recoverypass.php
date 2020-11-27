<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="icon" type="image/png" href="img/Logo.png">
    <script src="js/index.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="login-page">
        <img src="img/Logo.png" alt="Realarm Alarm System" class="Logo">
        <div class="form">
          <form name="form1" class="login-form" action="php/recoveri.php" method="POST">
             <label for="txtPass">Recuperar contraseña</label>
            <input name="txtPass" type="text" placeholder="Serie del dispositivo"required>
            <input name="txtPass2" type="text" placeholder="Clave del dispositivo"required>
            <input name="txtPass3" type="password" placeholder="Contraseña Nueva"required>
            <input name="txtPass4" type="password" placeholder="Vuelva a introducir la nueva contraseña"required>
            <input value="Recuperar"  type="submit" />
            <input value="Regresar a la pagina principal" type="button" onclick="regprin()"/>
            <input type="button" value="Quiero registrarme" onclick="ireg()">
            <p class="message">El numero de serie lo puedes encontrar en la etiqueta en la caja
                de tu dispositivo al igual la clave secreta</p>
          </form>
        </div>
      </div>
</body>
</html>