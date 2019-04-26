<?php

require_once "../../../Controlador/ordenController.php";

$control = new OrdenController();

echo "<a href='listar.orden.php'>Volver</a><br><br>";

if ($control->Eliminar($_GET['idOrdenProduccion'])) {
    echo "Datos eliminados con éxito";
}

?>