<?php include("../models/usuario.php");


$obj = new usuario();
$nombre = isset($_POST["nombre"])  ? $_POST["nombre"]: NULL;
$correo = isset($_POST["correoU"])  ? $_POST["correoU"]: NULL;
$clave= isset($_POST["claveU"]) ? $_POST["claveU"]:NULL;


if(isset($_POST["Registrar"])){
    $obj->insusu($nombre,$correo,$clave);
    echo "<script>alert('usuario insertado  ')</script>";
    header ("location:../views/login/login.php");

}elseif(isset($_POST["Modificar"])){
    $obj->updusu($correo,$clave);
    echo "<script>alert('Se modifico el usuario ')</script>";
    header ("location:../views/login/login.php");

}elseif(isset($_POST["Consultar"])){
    $consulta = $obj->selrece1($correo);
    echo "<script>alert('los datos son' .$consulta.)</script>";

}elseif(isset($_POST["Eliminar"])){
    $obj->delusu($correo);
    echo "<script>alert(' Se elimino el usuario  ')</script>";
    header ("location:../views/login/login.php");
}
?>
