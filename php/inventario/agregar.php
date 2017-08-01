<?php
 
if(!empty($_POST)){
	if(isset($_POST["PRODUCTO"]) &&isset($_POST["MARCA"]) &&isset($_POST["COLOR"]) &&isset($_POST["CALIDAD"]) &&isset($_POST["UNIDADES"]) &&isset($_POST["COSTO"])) {
		if($_POST["PRODUCTO"]!=""&& $_POST["MARCA"]!=""&&$_POST["COLOR"]!=""&& $_POST["CALIDAD"]!=""&& $_POST["UNIDADES"]!="" && $_POST["COSTO"]!=""){
			include "../conexion.php";

			$sql = "insert into inventario(PRODUCTO,MARCA,COLOR,CALIDAD,UNIDADES,COSTO) value (\"$_POST[PRODUCTO]\",\"$_POST[MARCA]\",\"$_POST[COLOR]\",\"$_POST[CALIDAD]\",\"$_POST[UNIDADES]\",\"$_POST[COSTO]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../../inventario.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../../inventario.php';</script>";

			}
		}
	}
}



?>
