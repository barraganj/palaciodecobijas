<?php

	include './models/venta.php';
	$venta  = new venta();

	//Si utiliza el filtro de busqueda
	if(isset($search)){
		$ventas = $venta->getventaBySearch($dataSearch);
	}else{
		//Trae todos las ventas 
		$dataSearch=NULL;
		$ventas =$venta->getventa();
	}

	$title="Listado de ventas";
	include 'toolbar.php';
?>
<div class="row">
	<div class="col text-center">
		<i class="material-icons" style="font-size: 80px;"></i>
		<BR></BR>
	</div>
</div>
<div class="row">
	<div class="col">
		<form action="./venta.php" method="post" accept-charset="utf-8" class="form-inline">
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
				<th class="text-center">ID</th>
				<th class="text-center">ClaveTransaccion</th>
				<th class="text-center">PaypalDatos</th>
				<th class="text-center">Fecha</th>
				<th class="text-center">Correo</th>
				<th class="text-center">Total</th>
				<th class="text-center">Statu</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</thead>
			<tbody>
				<?php

					if(count($ventas)>0){

						foreach ($ventas as $column =>$value) {
				?>

							<tr id="row<?php echo $value['ID']; ?>">
								<td><?php echo $value['ID']; ?></td>
								<td><?php echo $value['ClaveTransaccion']; ?></td>
								<td><?php echo $value['PaypalDatos']; ?></td>
								<td><?php echo $value['Fecha']; ?></td>
								<td><?php echo $value['Correo']; ?></td>
								<td><?php echo $value['Total']; ?></td>
								<td><?php echo $value['Statu']; ?></td>
								<td class="text-center">
								<a href="./venta.php?page=edit&ID=<?php echo $value['ID'] ?>" title="editar venta: <?php echo $value['ClaveTransaccion'] ?>">
										<i class="material-icons btn_edit">edit</i>
									</a>
								</td>
								<td class="text-center">
									<a href="./venta.php" onclick="btnDeleteventa(<?php echo $value['ID' ] ?>)" ID="btnDeleteventa" title="Borrar venta: <?php echo $value['ClaveTransaccion']  ?>">
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
								No se encontraron ventas.
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

	function btnDeleteventa(ID){
		if(confirm("Esta seguro de eliminar la venta ?")){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				var response   = JSON.parse(this.responseText);
				var msgSuccess = document.getElementById('msgSuccess');
				var msgDanger   = document.getElementById('msgDanger');
				if(response.success){
					msgSuccess.style.display = 'inherit';
					msgSuccess.innerHTML     = 'La venta  ha sido borrado de la base de datos.';
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
			xhttp.open("GET", "./controllers/venta.php?delete=true&ID="+ID, true);
			xhttp.send();
		}
	}


</script>