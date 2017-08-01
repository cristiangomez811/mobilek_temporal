<?php

if(!empty($_GET)){
			include "../conexion.php";

			$sql = "DELETE FROM inventario WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../../inventario.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../../inventario.php';</script>";

			}
}

?>
