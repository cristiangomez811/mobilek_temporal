<?php
include "../conexion.php";

$user_id=null;
$sql1= "select * from clientes where id = ".$_GET["id"];
$query = $con->query($sql1);
$cliente  = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $cliente =$r;
  break;
}

  }
?>

<?php if($cliente !=null):?>

<form role="form" method="post" action="../clientes/actualizar.php">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $cliente ->nombre; ?>" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="cedula">Cedula</label>
    <input type="text" class="form-control" value="<?php echo $cliente ->cedula; ?>" name="cedula" required>
  </div>
  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $cliente ->telefono; ?>" name="telefono" required>
  </div>
<input type="hidden" name="id" value="<?php echo $cliente ->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra </p>

<?php endif;?>
