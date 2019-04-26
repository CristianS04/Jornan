<?php

require_once "../../../Controlador/pagoController.php";

$control = new PagoController();

echo "<a href='listar.pagos.php'>Volver</a><br><br>";

if ($control->Eliminar($_GET['idPago'])) {
    echo "<script>confirm('Datos eliminados con éxito')</script>";

}

?>