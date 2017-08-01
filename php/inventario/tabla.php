<?php

include "./php/conexion.php";

$user_id=null;
$sql1= "select * from inventario";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Producto</th>
	<th>Marca</th>
	<th>Color</th>
	<th>Calidad</th>
	<th>Unidades</th>
	<th>Costo</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["PRODUCTO"]; ?></td>
	<td><?php echo $r["MARCA"]; ?></td>
	<td><?php echo $r["COLOR"]; ?></td>
	<td><?php echo $r["CALIDAD"]; ?></td>
	<td><?php echo $r["UNIDADES"]; ?></td>
	<td><?php echo $r["COSTO"]; ?></td>

		<td style="width:150px;">
		<a href="./php/inventarioModels/editar.php?id=<?php echo $r["ID"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["ID"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["ID"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/inventario/eliminar.php?id="+<?php echo $r["ID"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
