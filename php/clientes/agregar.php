<?php
 
if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["cedula"]) &&isset($_POST["telefono"])) {
		if($_POST["nombre"]!=""&& $_POST["cedula"]!=""){
			include "../conexion.php";

			$sql = "insert into clientes(nombre,cedula,telefono) value (\"$_POST[nombre]\",\"$_POST[cedula]\",\"$_POST[telefono]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../../clientes.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../../clientes.php';</script>";

			}
		}
	}
}



?>
