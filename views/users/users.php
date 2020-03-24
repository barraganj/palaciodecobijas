<?php

	include './models/producto.php';
	$producto  = new producto();

	//Si utiliza el filtro de busqueda
	if(isset($search)){
		$productos = $producto->getproductoBySearch($dataSearch);
	}else{
		//Trae todos los usuarios
		$dataSearch=NULL;
		$productos =$producto->getproductos();
	}

	$title="Listado de Productos";
	include 'toolbar.php';
?>
<div class="row">
	<div class="col text-center">
		<i class="material-icons" style="font-size: 80px;">people</i>
	</div>
</div>
<div class="row">
	<div class="col">
		<form action="./index.php" method="post" accept-charset="utf-8" class="form-inline">
			<div class="form-group mx-sm-3 mb-2">
    			<input type="text" class="form-control" name="dataSearch" autofocus required placeholder="Buscar" value="<?php echo $dataSearch;  ?>">
  			</div>
  			<button type="submit" name="btnSearch" class="btn btn-primary mb-2">Buscar</button>
		</form>
	</div>
</div>
<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead class="thead-dark">
				<!-- <th>id</th> -->
				<th class="text-center">Nombre</th>
				<th class="text-center">Precio</th>
				<th class="text-center">Descripcion</th>
				<th class="text-center">Imagen</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</thead>
			<tbody>
				<?php

					if(count($productos)>0){

						foreach ($productos as $column =>$value) {
				?>

							<tr id="row<?php echo $value['ID']; ?>">
								<td><?php echo $value['Nombre']; ?></td>
								<td><?php echo $value['Precio']; ?></td>
								<td><?php echo $value['Descripcion']; ?></td>
								<td><?php echo $value['Imagen']; ?></td>
								<td class="text-center">
								<a href="./index.php?page=edit&ID=<?php echo $value['ID'] ?>" title="editar producto: <?php echo $value['Nombre'] ?>">
										<i class="material-icons btn_edit">edit</i>
									</a>
								</td>
								<td class="text-center">
									<a href="./index.php" onclick="btnDeleteproducto(<?php echo $value["ID" ] ?>)" ID="btnDeleteproducto" title="Borrar producto: <?php echo $value['Nombre']  ?>">
										<i class="material-icons btn_delete">delete_forever</i>
									</a>
								</td>
							</tr>
				<?php
						}
					}else{
				?>
					<tr>
						<td colspan="5">
							<div class="alert alert-info">
								No se encontraron productos.
							</div>
						</td>
					</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="row">
		<div class="col">
			<div class="alert alert-success" id="msgSuccess" style="display: none;"></div>
			<div class="alert alert-danger" id="msgDanger" style="display: none;"></div>
		</div>
	</div>
<script type="text/javascript">

	function btnDeleteproducto(ID){
		if(confirm("Esta seguro de eliminar el producto?")){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				var response   = JSON.parse(this.responseText);
				var msgSuccess = document.getElementById('msgSuccess');
				var msgDanger   = document.getElementById('msgDanger');
				if(response.success){
					msgSuccess.style.display = 'inherit';
					msgSuccess.innerHTML     = 'El producto ha sido borrado de la base de datos.';
					msgDanger.style.display  = 'none';

					var row    = document.getElementById('row'+ID);
					var parent = row.parentElement;
        			parent.removeChild(row);

					// location.reload(true);
				}else if(response.error){
					msgDanger.style.display  = 'inherit';
					msgDanger.innerHTML      = 'No se ha podido eliminar el registro';
					msgSuccess.style.display = 'none';
				}
			}
			};
			xhttp.open("GET", "./controllers/producto.php?delete=true&ID="+ID, true);
			xhttp.send();
		}
	}


</script>