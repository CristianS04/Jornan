<?php

require_once "../../../Controlador/personaController.php";

$control = new PersonaController();

echo "<a href='listar.usuario.php'>Volver</a><br><br>";

if ($control->Eliminar($_GET['idPersona'])) {
    echo "<script>confirm('Datos eliminados con éxito')</script>";

}

?>