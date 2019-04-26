<?php

require_once "../../../Controlador/proveedorController.php";

$control = new ProveedorController();

echo "<a href='listar.proveedores.php'>Volver</a><br><br>";

if ($control->Eliminar($_GET['idProveedor'])) {
    echo "<script>confirm('Datos eliminados con éxito')</script>";

}

?>