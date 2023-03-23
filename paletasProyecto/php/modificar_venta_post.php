<?php
include "../conexion.php";

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["sabor"]) and !empty($_POST["Cantidad"]) and !empty($_POST["Fec_mov"]) and !empty($_POST["Tipo_mov"])) {
        
        $id=$_POST["id"]; 
        $sabor=$_POST["sabor"];
        $Cantidad=$_POST["Cantidad"];
        $Fec_mov=$_POST["Fec_mov"];
        $Tipo_mov=$_POST["Tipo_mov"];

        $update_query=$conn->query(" update ventas set sabor='$sabor', Cantidad='$Cantidad', Fec_mov='$Fec_mov', Tipo_mov='$Tipo_mov'  WHERE ID_venta=$id");
        if ($update_query==1) {
            header("location: ../ventas.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar venta</div>";
        }
        
    }
    else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}
?>
