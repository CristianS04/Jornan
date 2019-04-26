<?php

require_once "../../../Controlador/abonosController.php";

$control = new AbonoController();

echo "<a href='listar.abono.php'>Volver</a><br><br>";

if ($control->Eliminar($_GET['idAbono'])) {
    echo "<script>confirm('Datos eliminados con éxito')</script>";

}

?>