
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="icon" type="image/png" href="img/Logo.png">
    <script src="js/index.js"></script>
    <title>Login</title>
</head>
<body oncopy="return false" onpaste="return false">
    <div class="login-page">
        <img src="img/Logo.png" alt="Realarm Alarm System" class="Logo">
        <div class="form">
          <form name="form1" class="login-form" action="php/realarmValidar.php" method="POST">
             <label for="txtSerie">Login</label>
            <input name="txtSerie" type="text" placeholder="Numero de serie del Dispositivo"required/>
            <input name="txtPass" type="password" placeholder="contraseña"required>
            <input   type="submit"value="Entrar"/>
            <input value="Regresar a la pagina principal" type="button" onclick="regprin()"/>
            <input type="button" value="Quiero registrarme" onclick="ireg()">
            <a href="recoverypass.php">Olvide mi contraseña</a>
            <p class="message">El numero de serie lo puedes encontrar en la etiqueta en la caja
                de tu dispositivo </p>
          </form>
        </div>
      </div>
</body>
</html>