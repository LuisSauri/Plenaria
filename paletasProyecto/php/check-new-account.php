<?php

require("../conexion.php");

if (!empty($_POST["btnregistrar"])){
    if (!empty($_POST["Nombre"])and !empty($_POST["Apellido"])and !empty($_POST["Correo"])and !empty($_POST["Contraseña"])and !empty($_POST["Fec_nacimiento"])) {
        
        $Nombre=$_POST["Nombre"];
        $Apellido=$_POST["Apellido"];
        $Correo=$_POST["Correo"];
        $Contraseña=$_POST["Contraseña"];
        $Fec_nacimiento=$_POST["Fec_nacimiento"];

        $sql=$conn->query("INSERT INTO usuario (Nombre,Apellido,Correo,Contraseña,Fec_nacimiento)values('$Nombre', '$Apellido', '$Correo', '$Contraseña', '$Fec_nacimiento')");
        if($sql==1) {
            header("location: ../index.php");
            //echo '<div class= "alert alert-success">Proyecto registrado correctamente</div>';
        } else {
            echo '<div class= "alert alert-alert">Error al registrar proyecto</div>';
        }

    }else{
        echo '<div class= "alert alert-alert>Alguno de los campos esta vacio;</div>';
    }
}

?>