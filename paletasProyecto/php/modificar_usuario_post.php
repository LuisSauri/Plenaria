<?php
include "../conexion.php";

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["Nombre"]) and !empty($_POST["Apellido"]) and !empty($_POST["Correo"]) and !empty($_POST["Contraseña"]) and !empty($_POST["Fec_nacimiento"])) {
        
        $id=$_POST["id"]; 
        $Nombre=$_POST["Nombre"];
        $Apellido=$_POST["Apellido"];
        $Correo=$_POST["Correo"];
        $Contraseña=$_POST["Contraseña"];
        $Fec_nacimiento=$_POST["Fec_nacimiento"];

        $update_query=$conn->query(" update usuario set Nombre='$Nombre', Apellido='$Apellido', Correo='$Correo', Contraseña='$Contraseña', Fec_nacimiento='$Fec_nacimiento'  WHERE id=$id");
        if ($update_query==1) {
            header("location: ../usuarios.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar usuario</div>";
        }
        
    }
    else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}
?>
