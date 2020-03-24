<?php
	include 'toolbar.php';
?>
<form action="./controllers/domicilio.php" method="POST">
<!-- <div class="form-group">
  	 <label for="name">ID</label>
    <input class="form-control" id="ID" name="ID" placeholder="ID" autofocus required>
  </div> -->

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
  	<input type="submit" name="create" value="Crear" class="btn btn-primary">
  </div>
  <div class="form-group text-center">
  	<?php
  		if(isset($_GET['success'])){
	?>
			<div class="alert alert-success">
				El domicilio ha sido creado.
			</div>
	<?php
  		}else if(isset($_GET['error'])){
  	?>
			<div class="alert alert-danger">
				Ha ocurrido un error al crear el domicilio , por favor intente de nuevo.
			</div>
	<?php
  		}
  	?>
  </div>
</form>