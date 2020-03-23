<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';

?>
<br> 

<form action="ventas.php" method="get">
  <label>Buscar:
  <input type="text" name="buscar"></label> 
  <input type="submit" name="enviando" value="dale">

</form>

<div class="row px-5">
		<table class="table table-bordered">
		<thead>
		<tr>
		  <th scope="col">ID </th>
		  <th scope="col">Clave transaccion</th>
		  <th scope="col">Paypal Datos</th>
      <th scope="col">Fecha</th>
      <th scope="col">Correo</th>
      <th scope="col">Total</th>
      <th scope="col">Estado</th>
		</tr>
		</thead>
		<tbody>
    </div>
  </div>
  <td><?php ?></td>
  <td><?php ?></td>
  <td><?php ?></td>
  <td><?php ?></td>
  <td><?php ?></td>
  <td><?php ?></td>
  <td><?php ?></td>
  

<php 


    



<?php 
include 'templates/pie.php';
?>