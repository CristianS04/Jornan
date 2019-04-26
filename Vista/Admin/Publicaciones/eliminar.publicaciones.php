<?php

require_once "../../../Controlador/publicacionesController.php";

$control = new PublicacionesController();

echo "<a href='listar.publicaciones.php'>Volver</a><br><br>";

if ($control->Eliminar($_GET['idPublicacion'])) {
    echo "<script>confirm('Datos eliminados con éxito')</script>";

}

?>