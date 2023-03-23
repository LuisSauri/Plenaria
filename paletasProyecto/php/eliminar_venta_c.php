<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conn->query(" delete from ventas where ID_venta=$id ");
    if ($sql==1) {
        echo '<div class="alert alert-success">Venta eliminada correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar venta</div>';
    }
    
}
?>