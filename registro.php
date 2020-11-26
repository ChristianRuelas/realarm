<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="css/reg.css">
   <script src="js/index.js"></script>
    <title>Registro</title>
</head>
<body>
    <div class="login-page">
        <img src="img/Logo.png" alt="Realarm Alarm System" class="Logo">
        <div class="form">
          <form name="form1" class="login-form" action="php/realarmAltas.php" method="POST">
            <label for="txtSerie">Registro</label>
            <input name="txtName" type="text" placeholder="Primer nombre"/>
            <input name="txtAp" type="text" placeholder="Primer apellido"/>
            <input name="txtSerie" type="text" placeholder="Numero de serie del Dispositivo"/>
            <input name="txtTel" type="text" placeholder="Clave del sipositivo">
            <input name="txtPass" type="password" placeholder="contraseña">
            <input name="txtPass2" type="password" placeholder="Repita la contraseña">
            <input value="Registrarse"  type="button" onclick="vercon()"/>
            <input value="Regresar a la pagina principal" type="button" onclick="regprin()"/>
            <p class="message">El numero de serie lo puedes encontrar en la etiqueta en la caja
                de tu dispositivo y junto la clave secreta</p>
          </form>
        </div>
      </div>
    
</body>
</html>