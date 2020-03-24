<?php
	include dirname(__file__,2).'/models/venta.php';

	$ventas=new venta();

	//Request: creacion de una nueva venta
	if(isset($_POST['create']))
	{
		if($ventas->newventa($_POST)){
			header('location: ../venta.php?page=new&success=true');
		}else{
			header('location: ../venta.php?page=new&error=true');
		}
	}

	//Request: editar venta
	if(isset($_POST['edit']))
	{
		if($ventas->setEditventa($_POST)){
			header('location: ../venta.php?page=edit&ID='.$_POST['ID'].'&success=true');
		}else{
			header('location: ../venta.php?page=edit&ID='.$_POST['ID'].'&error=true');
		}
	}

	//Request: editar usuario
	if(isset($_GET['delete']))
	{
		if($ventas->deleteventa($_GET['ID'])){
			// header('location: ../index.php?page=users&success=true');
			echo json_encode(["success"=>true]);
		}else{
			// header('location: ../index.php?page=users&&error=true');
			echo json_encode(["error"=>true]);
		}
	}

?>