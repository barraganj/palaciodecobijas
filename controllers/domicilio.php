<?php include("../models/domicilio.php");

 
$obj = new domicilio();
$fecha1= isset($_POST["fechaconfirmacion"])  ? $_POST["fechaconfirmacion"]:NULL;
$fecha2= isset($_POST["fechaentrega"])  ? $_POST["fechaentrega"]:NULL;

if(isset($_POST["Registrar"])){
    $obj->inscli($fecha1,$fecha2);
    echo "<script>alert('dimicilio insertado  ')</script>";
    header ("location:../views/dimicilio.php");

}elseif(isset($_POST["Modificar"])){
    $obj->updcli($fecha1,$fecha2);
    echo "<script>alert('Se modifico el domicilio ')</script>";
    header ("location:../views/dimicilio.php");

}elseif(isset($_POST["Consultar"])){
    $consulta = $obj->selcli($fecha1);
    echo "<script>alert('los datos son' .$consulta.)</script>";

}elseif(isset($_POST["Eliminar"])){
    $obj->delcli($fecha1);
    echo "<script>alert(' Se elimino el domicilio  ')</script>";
    header ("location:../views/dimicilo.php");
}
?>
