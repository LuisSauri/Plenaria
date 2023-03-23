<?php

include "conexion.php";

if (!empty($_POST["btnregistrar"])){
    if (!empty($_POST["sabor"])and !empty($_POST["Costo"])and !empty($_POST["Precio"])and !empty($_POST["Precio_m"])) {
        
        $sabor=$_POST["sabor"];
        $Costo=$_POST["Costo"];
        $Precio=$_POST["Precio"];
        $Precio_m=$_POST["Precio_m"];

        $sql=$conn->query("insert into paletas(sabor,Costo,Precio,Precio_m)values('$sabor', '$Costo', '$Precio', '$Precio_m')");
        if($sql==1) {
            echo '<div class= "alert alert-success">Helado registrado correctamente</div>';
        } else {
            echo '<div class= "alert alert-alert">Error al registrar Helado</div>';
        }

    } else {
        echo '<div class= "alert alert-alert>Alguno de los campos esta vacio;</div>';
    }
}

?>