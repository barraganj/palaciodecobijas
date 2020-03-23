<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';

?>

<?php
if ($_POST) {
    $total=0;
    $SID=session_id();
    $correo=$_POST['email'];

    foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
    }
    
    
    $sentencia = $pdo->prepare("INSERT INTO `tblventas` 
            (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `Status`) 
    VALUES (NULL, :ClaveTransaccion, '', NOW(),:Correo, :Total, 'pendiente');");
    
    $sentencia->bindParam(":ClaveTransaccion", $SID);
    $sentencia->bindParam(":Correo", $correo);
    $sentencia->bindParam(":Total", $total);
    $sentencia->execute();

    $idVenta=$pdo->lastInsertId();
    foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
        $sentencia = $pdo->prepare("INSERT INTO `tbldetalleventa` 
                (`ID`, `IDVenta`, `IDProducto`, `Precio`, `Cantidad`) 
        VALUES (NULL, :IDVenta, :IDProducto, :Precio, :Cantidad);");

        $sentencia->bindParam(":IDVenta", $idVenta);
        $sentencia->bindParam(":IDProducto", $producto['ID']);
        $sentencia->bindParam(":Precio", $producto['PRECIO']);
        $sentencia->bindParam(":Cantidad", $producto['CANTIDAD']);
        $sentencia->execute();
    }

    // echo "<h3>".$total."</h3>";
}

?>

<!DOCTYPE html>


<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style>
        /* Media query for mobile viewport */
        
        @media screen and (max-width: 400px) {
            #paypal-button-container {
                width: 100%;
            }
        }
        /* Media query for desktop viewport */
        
        @media screen and (min-width: 400px) {
            #paypal-button-container {
                width: 250px;
            }
        }
        
        #pay {
            margin-right: 50%;
        }
        #paypal-button-container{
            position: relative;
            text-align: center;
        }
        .contenedor{
            margin-left:400px;
        }
    </style>
</head>

<div class="jumbotron text-center">
    <h1 class="display-4">Paso final!</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar con paypal la cantidad de:
        <h4>$<?php echo number_format($total); ?></h4>

        <body>

        <!-- Set up a container element for the button -->
        <div class="contenedor">
        <div id="paypal-button-container"></div>
        </div>

        <!-- Include the PayPal JavaScript SDK -->
        <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

        <script>
            // Render the PayPal button into #paypal-button-container
            paypal.Buttons().render('#paypal-button-container');
        </script>

        </body>
    </p>
        <p>Los productos seran enviados una vez se procese el pago <br>
        <strong>(para aclaraciones : numero de la empresa)</strong>
        </p>
</div>



