<?php

require_once "../../../Controlador/cotizacionController.php";


$control = new CotizacionController();
date_default_timezone_set('America/Bogota');
         $fecha_actual=date("Y-m-d");
         $fechaCotizacion=$_GET['fecha'];
         
         
    $dias = (strtotime($fechaCotizacion)-strtotime($fecha_actual))/86400; $dias =abs($dias); 
    $dias=floor($dias); 
$estado=$_GET['estado'];
if($estado==1 && $dias>14){
    $cambio=4;
}else {
    $cambio=1;
}

echo "<a href='listar.cotizacion.php'>Volver</a><br><br>";

if ($control->CambiarEstado($cambio,$_GET['idCotizacion'])) {
    echo "<script>confirm('Datos eliminados con éxito')</script>";

}

?>