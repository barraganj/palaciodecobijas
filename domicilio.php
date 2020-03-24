<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Palacio de cobijas </title>
	
	<link rel="icon" href="images/favicon.png" type="img/x-icon">
</head>
<body>
<?php
	define('HOMEDIR',__DIR__);
	include 'template/menu.php';
	include 'views/a/header.php';
	$page=isset($_GET['page'])?$_GET['page']:'users';
	if(isset($_POST['btnSearch'])){
		$search     =true;
		$dataSearch =$_POST['dataSearch'];
	}
	include 'views/domicilio/'.$page.'.php';
	include 'views/a/footer.php';
	include 'views/template/footer.php';
?>
</body>
</html>
