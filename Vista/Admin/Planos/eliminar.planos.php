<?php

require_once "../../../Controlador/planosController.php";

$control = new planosController();

echo "<a href='listar.planos.php'>Volver</a><br><br>";

if ($control->Eliminar($_GET['idPlano'])) {
    echo "<script>confirm('Datos eliminados con éxito')</script>";

}

?>