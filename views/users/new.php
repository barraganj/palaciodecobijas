<?php
	include 'toolbar.php';
?>
<form action="./controllers/producto.php" method="POST">
<!-- <div class="form-group">
  	 <label for="name">ID</label>
    <input class="form-control" id="ID" name="ID" placeholder="ID" autofocus required>
  </div> -->
  <div class="form-group">
  	 <label for="last_name">Nombre</label>
    <input type="number" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required >
  </div>
  <div class="form-group">
  	 <label for="number">Precio</label>
    <input type="number" class="form-control" id="Precio" name="Precio" placeholder="Precio" required >
  </div>
  <div class="form-group">
  	 <label for="text">Descripcion</label>
    <input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Descripcion" required>
  </div>
  <div class="form-group">
  	 <label for="number">Imagen</label>
    <input type="text" class="form-control" id="Imagen" name="Imagen" placeholder=" Imagen" required >
  </div>
  <div class="form-group text-center">
  	<input type="submit" name="create" value="Crear" class="btn btn-primary">
  </div>
  <div class="form-group text-center">
  	<?php
  		if(isset($_GET['success'])){
	?>
			<div class="alert alert-success">
				El producto ha sido creado.
			</div>
	<?php
  		}else if(isset($_GET['error'])){
  	?>
			<div class="alert alert-danger">
				Ha ocurrido un error al crear el producto, por favor intente de nuevo.
			</div>
	<?php
  		}
  	?>
  </div>
</form>