<?php

  include './models/domicilio.php';
  $title="Listado de domicilio";

  $domicilio     = new domicilio();
  $ID       = isset($_GET['ID'])?$_GET['ID']:null;
  $domicilio    = $domicilio->getdomicilioById($ID);
  $Nombre     = '';
  $lastName = '';
  $email    = '';
  if($domicilio){
    $ID    = $domicilio[0]['ID'];
    $IDVenta = $domicilio[0]['IDVenta'];
    $IDProducto  = $domicilio[0]['IDProducto'];
    $Precio = $domicilio[0]['Precio'];
    $Cantidad = $domicilio[0]['Cantidad'];
  }

	include 'toolbar.php';
?>
<form action="./controllers/domicilio.php" method="POST">
<div class="form-group">
  	 <label for="last_name">IDVenta</label>
    <input type="text" class="form-control" id="IDVenta" name="IDVenta" placeholder="IDVenta" required >
  </div>
  <div class="form-group">
  	 <label for="number">IDProducto</label>
    <input type="text" class="form-control" id="IDProducto" name="IDProducto" placeholder="IDProducto" required >
  </div>
 
  <div class="form-group">
  	 <label for="text">Precio</label>
    <input type="number" class="form-control" id="Precio" name="Precio" placeholder="Precio" required>
  </div>
  <div class="form-group">
  	 <label for="number">Cantidad</label>
    <input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder=" Cantidad" required >
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