<?php
	include 'toolbar.php';
?>
<form action="./controllers/venta.php" method="POST">
<!-- <div class="form-group">
  	 <label for="name">ID</label>
    <input class="form-control" id="ID" name="ID" placeholder="ID" autofocus required>
  </div> -->
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
  	<input type="submit" name="create" value="Crear" class="btn btn-primary">
  </div>
  <div class="form-group text-center">
  	<?php
  		if(isset($_GET['success'])){
	?>
			<div class="alert alert-success">
				La venta ha sido creado.
			</div>
	<?php
  		}else if(isset($_GET['error'])){
  	?>
			<div class="alert alert-danger">
				Ha ocurrido un error al crear la venta , por favor intente de nuevo.
			</div>
	<?php
  		}
  	?>
  </div>
</form>