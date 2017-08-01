<?php

	if(!empty($_POST)){
		if(isset($_POST["PRODUCTO"]) &&isset($_POST["MARCA"]) &&isset($_POST["COLOR"]) &&isset($_POST["CALIDAD"]) &&isset($_POST["UNIDADES"]) &&isset($_POST["COSTO"])) {
			if($_POST["PRODUCTO"]!=""&& $_POST["MARCA"]!=""&&$_POST["COLOR"]!=""&& $_POST["CALIDAD"]!=""&& $_POST["UNIDADES"]!="" && $_POST["COSTO"]!=""){
				include "../conexion.php";

				$sql = "update inventario set PRODUCTO =\"$_POST[PRODUCTO]\",MARCA =\"$_POST[MARCA]\",COLOR =\"$_POST[COLOR]\",UNIDADES =\"$_POST[UNIDADES]\",COSTO =\"$_POST[COSTO]\" where ID =".$_POST["ID"];
				if($con->query($sql)== true){
					print "<script>alert(\"Actualizado exitosamente.\");window.location='../../inventario.php';</script>";
				}else{

					print "<script>alert(\"No se pudo actualizar.\");window.location='../../inventario.php';</script>";

				}
		}
	}
}



?>
