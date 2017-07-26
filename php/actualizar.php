<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["cedula"]) &&isset($_POST["telefono"])){
		if($_POST["nombre"]!=""&& $_POST["cedula"]!=""&&$_POST["telefono"]!=""){
			include "conexion.php";

			$sql = "update clientes set nombre=\"$_POST[nombre]\",cedula=\"$_POST[cedula]\",telefono=\"$_POST[telefono]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../clientes.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../clientes.php';</script>";

			}
		}
	}
}



?>
