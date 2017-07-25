<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from clientes where cedula = ".$_GET["cedula"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $clientes=$r;
  break;
}

  }
?>

<?php if($clientes!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $clientes->nombre; ?>" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="cedula">Cedula</label>
    <input type="text" class="form-control" value="<?php echo $clientes->cedula; ?>" name="cedula" required>
  </div>
  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $clientes->telefono; ?>" name="telefono" >
  </div>
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
