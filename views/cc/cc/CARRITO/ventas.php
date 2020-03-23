<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';

?>


<?php 

$busqueda = $_GET['buscar'];

try {
    $pdo = new PDO('mysql:host=localhost;dbname=tienda', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT ID,ClaveTransaccion,PaypalDatos,Fecha,Correo,Total,Status FROM tblventas WHERE ID = ?";
    $resultado = $pdo->prepare($sql);
    $resultado->execute(array($busqueda));
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      echo "id".$registro['ID']."Clave Transaccion".$registro['ClaveTransaccion']."Paypal".$registro['PaypalDatos']."Fecha".$registro['Fecha'].
      "Correo".$registro['Correo']."Total".$registro['Total']."Status".$registro['Status']."<br/>";
    }
    $resultado->closeCursor();
  
  }  
  catch(PDOException $e){
    print "¡Error!: <br/>";  
    return null;
  }
  
?>