<?php

include "conexion.php";

if (!empty($_POST["btnregistrar"])){
    if (!empty($_POST["sabor"])and !empty($_POST["Cantidad"])and !empty($_POST["Fec_mov"])and !empty($_POST["Tipo_mov"])) {
        
        $sabor=$_POST["sabor"];
        $Cantidad=$_POST["Cantidad"];
        $Fec_mov=$_POST["Fec_mov"];
        $Tipo_mov=$_POST["Tipo_mov"];

        $sql=$conn->query("INSERT INTO ventas(sabor,Cantidad,Fec_mov,Tipo_mov)values('$sabor', '$Cantidad', '$Fec_mov', '$Tipo_mov')");
        if($sql==1) {
            echo '<div class= "alert alert-success">Venta registrada correctamente</div>';
        } else {
            echo '<div class= "alert alert-alert">Error al registrar venta</div>';
        }

    } else {
        echo '<div class= "alert alert-alert>Alguno de los campos esta vacio;</div>';
    }
}

?>