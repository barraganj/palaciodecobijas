<?php
	include dirname(__file__,2).'/models/producto.php';

	$productos=new producto();

	//Request: creacion de nuevo producto
	if(isset($_POST['create']))
	{
		if($productos->newproducto($_POST)){
			header('location: ../views/users/index.php?page=new&success=true');
		}else{
			header('location: ../views/users/index.php?page=new&error=true');
		}
	}

	//Request: editar producto
	if(isset($_POST['edit']))
	{
		if($productos->setEditproducto($_POST)){
			header('location: ./index.php?page=edit&ID='.$_POST['ID'].'&success=true');
		}else{
			header('location: ./index.php?page=edit&ID='.$_POST['ID'].'&error=true');
		}
	}

	//Request: editar usuario
	if(isset($_GET['delete']))
	{
		if($users->deleteproducto($_GET['ID'])){
			// header('location: ../index.php?page=users&success=true');
			echo json_encode(["success"=>true]);
		}else{
			// header('location: ../index.php?page=users&&error=true');
			echo json_encode(["error"=>true]);
		}
	}

?>