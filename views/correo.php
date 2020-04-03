<?php
//llamando campos
$nombre = isset($_POST["nombre"])  ? $_POST["nombre"]: NULL;
$correo = isset($_POST["correoU"])  ? $_POST["correoU"]: NULL;
$clave= isset($_POST["claveU"]) ? $_POST["claveU"]:NULL;

//Datos del mensaje 
$destinatario = $correo;
$asunto = "Creasion de cuenta en el  palacio de las cobijas ";

$carta =" Hola amigo gracias por registrarteb a nuestra pagina el usuario es ${correo} y la contraseña es ${clave} ";

//Enviando Mensaje 
mail($destinatario,$asunto,$carta);
header('Location:views/login/login.php')
?>