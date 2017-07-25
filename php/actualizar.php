<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["cedula"]) && isset($_POST["telefono"])){
		if($_POST["nombre"]!=""&& $_POST["cedula"]!=""&&$_POST["telefono"]!=""){
			include "conexion.php";

			$sql = "update clientes set name=\"$_POST[nombre]\",cedula=\"$_POST[cedula]\",telefono=\"$_POST[telefon]\" where cedula=".$_POST["cedula"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>
