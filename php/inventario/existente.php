<?php
if(!empty($_POST)){
  if(isset($_POST["PRODUCTO"]) &&isset($_POST["MARCA"]) &&isset($_POST["COLOR"]) &&isset($_POST["CALIDAD"]) &&isset($_POST["UNIDADES"]) &&isset($_POST["COSTO"])) {
    if($_POST["PRODUCTO"]!=""&& $_POST["MARCA"]!=""&&$_POST["COLOR"]!=""&& $_POST["CALIDAD"]!=""&& $_POST["UNIDADES"]!="" && $_POST["COSTO"]!=""){
      include "../conexion.php";

      $sql1 = "select * from inventario where PRODUCTO =\"$_POST[PRODUCTO]\" AND MARCA =\"$_POST[MARCA]\" AND COLOR =\"$_POST[COLOR]\"";
      $query = $con->query($sql1);
      $inventario  = null;

      if($query->num_rows == 1){
        while ($r=$query->fetch_object()){
          $inventario =$r;
          break;
      }
      $unidades = $inventario->UNIDADES + $_POST["UNIDADES"];
      $costo = ($inventario->COSTO * $inventario->UNIDADES + $_POST["COSTO"] * $_POST["UNIDADES"]) / $unidades ;

      $sql2 = "update inventario set PRODUCTO =\"$_POST[PRODUCTO]\",MARCA =\"$_POST[MARCA]\",COLOR =\"$_POST[COLOR]\",UNIDADES =\"$unidades\",COSTO =\"$costo\" where ID =".$inventario->ID;
      if ($con->query($sql2) == true) {
        print "<script>alert(\"Guardado exitosamente.\");window.location='../../inventario.php';</script>";
      }
    } else {
      print "<script>alert(\"Error, el producto esta repetido.\");window.location='../../inventario.php';</script>";

    }


    }
  }
}
 ?>
