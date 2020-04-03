<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Palacio de Cobijas</title>
  <link rel="icon" href="img/favicon.png" type="img/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="style.css">

</head>
<body > 
<!-- partial:index.partial.html -->
<div class="container">
  <div class="info">
    <p> </p><BR></BR><BR></BR>
  </div>
</div>
<div class="form">
  <div ><img src="img/logo.png"/><BR></BR><BR></BR></div>

  <!-- <form method="POST" action="../../models/verificacionUsuario.php" class="register-form">
    <input type="email" name="correoU" placeholder="Correo"/>
    <input type="password" name="claveU" placeholder="Contraseña"/>
    <input type="submit" name="Registrar" class="btn-submit1" value="Registrar">
    <p class="message">¿Ya está registrado? <a href="#">Iniciar Sesión</a></p>
  </form> -->
  <h1 style="color:white"; fonts-size:20px >Iniciar Sesion </h1>
  <BR></BR>
  <form method="POST" action="../../models/verificacionUsuario.php" class="login-form">
    <input type="text" name="usuario" placeholder="Correo" required>
    <input type="password" name="clave" placeholder="Contraseña" required>
    <button type="submit">Ingresar</button>
    <p class="message">¿No está registrado? <a href="../registrar_Usuario.php"> Crear una cuenta</p>
  </form>
</div>
</video>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>

</body>
</html>
