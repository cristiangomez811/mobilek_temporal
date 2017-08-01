
<html>
	<head>
		<title>.: INVENTARIO :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "php/inventarioModels/navbarInventario.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>INVENTARIO</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>
	<a data-toggle="modal" href="#myModal2" class="btn btn-default">Agregar Existente</a>

<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/inventario/agregar.php">
  <div class="form-group">
    <label for="PRODUCTO">Producto</label>
    <input type="text" class="form-control" name="PRODUCTO" required>
  </div>
  <div class="form-group">
    <label for="MARCA">Marca</label>
    <input type="text" class="form-control" name="MARCA" required>
  </div>
  <div class="form-group">
    <label for="COLOR">Color</label>
    <input type="text" class="form-control" name="COLOR" >
  </div>
	<div class="form-group">
    <label for="CALIDAD">Calidad</label>
    <input type="text" class="form-control" name="CALIDAD" >
  </div>
	<div class="form-group">
    <label for="UNIDADES">Unidades</label>
    <input type="text" class="form-control" name="UNIDADES" >
  </div>
	<div class="form-group">
    <label for="COSTO">Costo</label>
    <input type="text" class="form-control" name="COSTO" >
  </div>

  <button type="submit" class="btn btn-default">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Existente</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/inventario/existente.php">
	<div class="form-group">
    <label for="PRODUCTO">Producto</label>
    <input type="text" class="form-control" name="PRODUCTO" required>
  </div>
  <div class="form-group">
    <label for="MARCA">Marca</label>
    <input type="text" class="form-control" name="MARCA" required>
  </div>
  <div class="form-group">
    <label for="COLOR">Color</label>
    <input type="text" class="form-control" name="COLOR" >
  </div>
	<div class="form-group">
    <label for="CALIDAD">Calidad</label>
    <input type="text" class="form-control" name="CALIDAD" >
  </div>
	<div class="form-group">
    <label for="UNIDADES">Unidades</label>
    <input type="text" class="form-control" name="UNIDADES" >
  </div>
	<div class="form-group">
    <label for="COSTO">Costo</label>
    <input type="text" class="form-control" name="COSTO" >
  </div>

  <button type="submit" class="btn btn-default">Agregar existente</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/inventario/tabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
