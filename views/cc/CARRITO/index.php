<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palacio de cobijas </title>

    <link rel="icon" href="images/favicon.png" type="img/x-icon">
</head>

<body>

    <?php
    include 'global/config.php';
    include 'global/conexion.php';
    include 'carrito.php';
    include 'templates/cabecera.php';

    ?>

    <br>
    <?php if ($mensaje != "") { ?>
        <div class="alert alert-success">
            <?php echo $mensaje; ?>

            <a href="mostrarCarrito.php" class="badge badge-success">ver carrito</a>
        </div>
    <?php } ?>
    <div class="row">
        <?php
        $listaProductos = getPDO();
        //print_r($listaProductos);
        ?>

        <?php foreach ($listaProductos as $producto) { ?>
            <div class="col-3">
                <div class="card">
                    <img title="<?php echo $producto['Nombre']; ?>" alt="<?php echo $producto['Nombre']; ?>" class="card-img-top" src="<?php echo $producto['Imagen']; ?>" data-toggle="popover" data-trigger="hover" data-content="<?php echo $producto['Descripcion']; ?>" height="317px">

                    <div class="card-body">
                        <span><?php echo $producto['Nombre']; ?></span>
                        <h5 class="card-title">$<?php echo number_format($producto['Precio']); ?></h5>
                        <p class="card-text">descripción</p>

                        <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">
                            <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY); ?>">
                            <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY); ?>">
                            <input type="number" name="cantidad" id="cantidad" min="1" max="10" value="1">
                            <br><br>
                            <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">agregar al carrito</button>

                        </form>



                    </div>
                </div>
            </div>

        <?php } ?>

    </div>

    </div>
    <script>
        $(function() {
            $('[data-toggle="popover"]').popover()
        });
    </script>
    <?php
    include 'templates/pie.php';
    ?>

</body>

</html>