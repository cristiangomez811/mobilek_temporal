<?php
include "../conexion.php";

$user_id=null;
$sql1= "select * from inventario where id = ".$_GET["id"];
$query = $con->query($sql1);
$inventario  = null;
if($query->num_rows>0){
  while ($r=$query->fetch_object()){
    $inventario =$r;
    break;
  }

}
?>

<?php if($inventario !=null):?>

<form role="form" method="post" action="../inventario/actualizar.php">
  <div class="form-group">
    <label for="PRODUCTO">Producto</label>
    <input type="text" class="form-control" value="<?php echo $inventario ->PRODUCTO; ?>" name="PRODUCTO" required>
  </div>
  <div class="form-group">
    <label for="MARCA">Marca</label>
    <input type="text" class="form-control" value="<?php echo $inventario ->MARCA; ?>" name="MARCA" required>
  </div>
  <div class="form-group">
    <label for="COLOR">Color</label>
    <input type="text" class="form-control" value="<?php echo $inventario ->COLOR; ?>" name="COLOR" required>
  </div>
  <div class="form-group">
    <label for="CALIDAD">Calidad</label>
    <input type="text" class="form-control" value="<?php echo $inventario ->CALIDAD; ?>" name="CALIDAD" required>
  </div>
  <div class="form-group">
    <label for="UNIDADES">Unidades</label>
    <input type="text" class="form-control" value="<?php echo $inventario ->UNIDADES; ?>" name="UNIDADES" required>
  </div>
  <div class="form-group">
    <label for="COSTO">Costo</label>
    <input type="text" class="form-control" value="<?php echo $inventario ->COSTO; ?>" name="COSTO" required>
  </div>

  <input type="hidden" name="ID" value="<?php echo $inventario ->ID; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>

  <p class="alert alert-danger">404 No se encuentra</p>

<?php endif;?>
