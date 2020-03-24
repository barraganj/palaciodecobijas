<?php
	include dirname(__file__,2).'/models/domicilio.php';

	$domicilios =new domicilio();

	//Request: creacion de un nuevo domicilio
	if(isset($_POST['create']))
	{
		if($domicilios->newdomicilio($_POST)){
			header('location: ../domicilio.php?page=new&success=true');
		}else{
			header('location: ../domicilio.php?page=new&error=true');
		}
	}

	//Request: editar domicilio
	if(isset($_POST['edit']))
	{
		if($domicilios->setEditdomicilio($_POST)){
			header('location: ../domicilio.php?page=edit&ID='.$_POST['ID'].'&success=true');
		}else{
			header('location: ../domicilio.php?page=edit&ID='.$_POST['ID'].'&error=true');
		}
	}

	//Request: editar domicilio
	if(isset($_GET['delete']))
	{
		if($domicilios->deletedomicilio($_GET['ID'])){
			// header('location: ../index.php?page=users&success=true');
			echo json_encode(["success"=>true]);
		}else{
			// header('location: ../index.php?page=users&&error=true');
			echo json_encode(["error"=>true]);
		}
	}

?>