<?php

  include './models/producto.php';
  $title="Listado de productos";

  $producto     = new producto();
  $ID       = isset($_GET['ID'])?$_GET['ID']:null;
  $producto    = $producto->getproductoById($ID);
  $Nombre     = '';
  $lastName = '';
  $email    = '';
  if($producto){
    $ID    = $producto[0]['ID'];
    $Nombre = $producto[0]['Nombre'];
    $Precio  = $producto[0]['Precio'];
    $Descripcion = $producto[0]['Descripcion'];
    $Imagen = $producto[0]['Imagen'];
  }

	include 'toolbar.php';
?>
<form action="./controllers/producto.php" method="POST">
<div class="form-group">
  	 <label for="name">ID</label>
    <input class="form-control" id="ID" name="ID" placeholder="ID" autofocus required>
  </div>
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