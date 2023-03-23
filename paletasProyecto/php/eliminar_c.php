<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conn->query(" delete from paletas where ID_Paleta=$id ");
    if ($sql==1) {
        echo '<div class="alert alert-success">Paleta Eliminada Correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Paleta Error al eliminar</div>';
    }
    
}
?>