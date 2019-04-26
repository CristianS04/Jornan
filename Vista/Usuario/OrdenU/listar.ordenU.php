<?php


session_start();
error_reporting(0);
$varsesion=$_SESSION['usuario'];
if ($varsesion== null || $varsesion=='') {
    echo 'Usted no tiene autorización';
    die();
} 
require_once "../../../Controlador/ordenController.php";
require_once "../../../Modelo/ordenModel.php";
$control = new OrdenController();
$orden = new OrdenModel();

?>


<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jornan</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="../css2/bootstrap.min.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="../css2/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->

<!-- jQuery -->
<link href='../fonts2.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='../fonts2.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="../fonta/css/fontawesome.min.css" type='text/css' />
<link rel="stylesheet" href="../fonta/css/solid.min.css" type='text/css' />

<script src="../js2/amcharts.js"></script>	
<script src="../js2/serial.js"></script>	
<script src="../js2/light.js"></script>	
<!-- //lined-icons -->
<script src="../js2/jquery-1.10.2.min.js"></script>
   <!--pie-chart--->
<script src="../js2/pie-chart.js" type="text/javascript"></script>
<script src="../js2/jquery.nicescroll.js"></script>
<script src="../js2/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="../js2/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
   <script src="../js2/jquery.fn.gantt.js"></script>
   <!-- real-time -->
<script language="javascript" type="text/javascript" src="../js2/jquery.flot.js"></script>
<script src="../js2/menu_jquery.js"></script>
 
</head>
<?php
include_once "../head-usua.php";
?>
<body  style=" background: #cecece; "  >
<div class="container" style="border: 1px solid black; width:800px; margin-top:45px; padding:10px; border-radius: 31px 31px 31px 31px;
margin-bottom:100px; border: 5px solid #000000;"> 
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Código Orden Producción</th>
      <th scope="col">Fecha Inicio</th>
      <th scope="col">Fecha Final</th>
      <th scope="col">Estado</th>
      <th scope="col">Cambios</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($control->listar() as $fila):?> 
     <td><?php echo $fila->__GET('idOrdenProduccion'); ?></td>
     <td><?php echo $fila->__GET('fechaInicio'); ?></td>
     <td><?php echo $fila->__GET('fechaFinal'); ?></td>
     <td><?php echo $fila->__GET('estado'); ?></td>
     <th><a class="btn btn-primary" href="editar.orden.php?idOrdenProduccion=<?php echo $fila->idOrdenProduccion;?>">Editar</a>
     
     
</tr>

<?php  endforeach; ?>


    </tr>
 
  </tbody>
</table>

</div>
<script>
 
</script>


</body>

    