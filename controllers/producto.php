<?php include("../models/producto.php");

$obj = new producto();
$nombre = isset($_POST["nombre"])  ? $_POST["nombre"]: NULL;
$precio= isset($_POST["precio"]) ? $_POST["precio"]:NULL;
$descripcion = isset($_POST["descripcion"])  ? $_POST["descripcion"]: NULL;
$imagen= isset($_POST["imagen"]) ? $_POST["imagen"]:NULL;
$estado= isset($_POST["estado"]) ? $_POST["estado"]:NULL;
$cantidad= isset($_POST["cantidad"]) ? $_POST["cantidad"]:NULL;



if(isset($_POST["Registrar"])){
    $obj->insusu($nombre,$precio,$descripcion,$imagen,$estado,$cantidad);
    echo "<script>alert('usuario insertado  ')</script>";
    header ("location:../views/producto.php");

}elseif(isset($_POST["Modificar"])){
    $obj->updusu($nombre,$precio,$descripcion,$imagen,$estado,$cantidad);
    echo "<script>alert('Se modifico el usuario ')</script>";
    header ("location:../views/producto.php");

}elseif(isset($_POST["Consultar"])){
    $consulta = $obj->selrece1($nombre);
    echo "<script>alert('los datos son' .$consulta.)</script>";

}elseif(isset($_POST["Eliminar"])){
    $obj->delusu($nombre);
    echo "<script>alert(' Se elimino el usuario  ')</script>";
    header ("location:../views/producto.php");
}

?>
