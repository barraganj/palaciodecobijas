<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Palacio de Cobijas</title>
  <link rel="icon" href="login/img/favicon.png" type="img/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="login/style.css">

</head>

<body>

  <!-- partial:index.partial.html -->
  <div class="container">
    <div class="info">

    </div>
  </div>
  <div class="form" style="top: 50px">
    <div><img src="login/img/logo.png" />
      <BR></BR><BR></BR></div>
<?php
      include("correo.php");
      ?>
    <form method="POST" action="../controllers/usuario.php" class="login-form">
      <input type="text" name="nombre" placeholder="Nombre" required>
      <input type="text" name="correoU" placeholder="Correo" required>
      <input type="password" name="claveU" placeholder="Contraseña" required>
      <button type="submit" name="Registrar" class="btn-submit1"> Registrarse </button>
      <p class="message"> <a href="../registrar_Usuario.php">Iniciar Sesión</p>
    </form>
    
  </div>
  </video>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/script.js"></script>

</body>

</html>