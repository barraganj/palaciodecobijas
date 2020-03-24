<?php

  include './models/venta.php';
  $title="Listado de ventas";

  $venta     = new venta();
  $ID       = isset($_GET['ID'])?$_GET['ID']:null;
  $venta    = $venta->getventaById($ID);
  $Nombre     = '';
  $lastName = '';
  $email    = '';
  if($venta){
    $ID    = $venta[0]['ID'];
    $ClaveTransaccion = $venta[0]['ClaveTransaccion'];
    $PaypalDatos  = $venta[0]['PaypalDatos'];
    $Fecha = $venta[0]['Fecha'];
    $Correo = $venta[0]['Correo'];
    $Total = $venta[0]['Total'];
    $Statu = $venta[0]['Statu'];
  }

	include 'toolbar.php';
?>
<form action="./controllers/venta.php" method="POST">
<div class="form-group">
  	 <label for="name">ID</label>
    <input class="form-control" id="ID" name="ID" placeholder="ID" autofocus required>
  </div>
  <div class="form-group">
  	 <label for="last_name">ClaveTransaccion</label>
    <input type="text" class="form-control" id="ClaveTransaccion" name="ClaveTransaccion" placeholder="Clave Transaccion" required >
  </div>
  <div class="form-group">
  	 <label for="number">PaypalDatos</label>
    <input type="text" class="form-control" id="PaypalDatos" name="PaypalDatos" placeholder="Paypal Datos" required >
  </div>
  <div class="form-group">
  	 <label for="text">Fecha</label>
    <input type="number" class="form-control" id="Fecha" name="Fecha" placeholder="Fecha" required>
  </div>
  <div class="form-group">
  	 <label for="number">Correo</label>
    <input type="email" class="form-control" id="Correo" name="Correo" placeholder=" Correo" required >
  </div>
  <div class="form-group">
  	 <label for="text">Total</label>
    <input type="number" class="form-control" id="Total" name="Total" placeholder="Total" required>
  </div>
  <div class="form-group">
  	 <label for="number">Statu</label>
    <input type="text" class="form-control" id="Statu" name="Statu" placeholder=" Statu" required >
  </div>
  <div class="form-group text-center">
  	<input type="submit" name="edit" value="Editar" class="btn btn-primary">
  </div>
  <div class="form-group text-center">
  	<?php
  		if(isset($_GET['success'])){
	?>
			<div class="alert alert-success">
				La informacion ha sido actualizada.
			</div>
	<?php
  		}else if(isset($_GET['error'])){
  	?>
			<div class="alert alert-danger">
				Ha ocurrido un error al editar la información, por favor intente de nuevo.
			</div>
	<?php
  		}
  	?>
  </div>
  <input type="hidden" name="ID" value="<?php echo $ID ?>">
</form>