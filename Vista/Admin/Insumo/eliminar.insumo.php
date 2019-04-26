<?php

require_once "../../../Controlador/InsumoController.php";

$control = new InsumoController();

echo "<a href='listar.insumo.php'>Volver</a><br><br>";

if ($control->Eliminar($_GET['idInsumo'])) {
    echo "<script>confirm('Datos eliminados con éxito')</script>";

}

?>