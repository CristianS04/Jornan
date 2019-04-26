<?php

require_once "../../../Controlador/citasController.php";

$control = new CitasController();

echo "<a href='listar.cita.php'>Volver</a><br><br>";

if ($control->cambiarEstadoCumplida($_GET['idAgendaCita'])) {
    echo "<script>confirm('Estado modificado con éxito')</script>";

}

?>