<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palacio de las cobijas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
<?php include "template/menu.php";?>
<div style="width: 1200px;height:450px; margin-top:10px;" >
<div class="container">
<BR>
<form method="post" action="../controllers/domicilio.php">
    <h1>Domiciliarios</h1>
    <BR></BR>
  <div class="row">
    <div class="col">
      <input type="text" name="fechaconfirmacion" class="form-control" placeholder="Fecha Confirmacion" required >
    </div>
    <div class="col">
      <input type="text" name="fechaentrega" class="form-control" placeholder="Fecha Entrega " required>
    </div>
  </div><BR></BR>
<input type="submit" name="Consultar" class="btn-submit1" value="Consultar Domiciliario">
<input type="submit" name="Registrar" class="btn-submit1" value="Agregar Domiciliario ">
<input type="submit" name="Modificar" class="btn-submit1" value="Modificar Domiciliario ">
<input type="submit" name="Eliminar" class="btn-submit1" value="Eliminar Domiciliario ">
</form>
<BR>

</div>
</div>

    <?php include "template/footer.php";?>
</body>

</html>