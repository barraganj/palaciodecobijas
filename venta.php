<?php
	define('HOMEDIR',__DIR__);
	include 'template/menu.php';
	include 'views/a/header.php';
	$page=isset($_GET['page'])?$_GET['page']:'users';
	if(isset($_POST['btnSearch'])){
		$search     =true;
		$dataSearch =$_POST['dataSearch'];
	}
	include 'views/venta/'.$page.'.php';
	include 'views/a/footer.php';
	include 'views/template/footer.php';
?>