<?php

session_start();
error_reporting(0);
$varsesion=$_SESSION['usuario'];
if ($varsesion== null || $varsesion=='') {
    echo 'Usted no tiene autorización';
    die();
} 
require_once "../../../Controlador/cotizacionController.php";
require_once "../../../Modelo/cotizacionModel.php";
$control = new CotizacionController();
$cotizacion = new CotizacionModel();

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
<body style=" background: #cecece; "  >
<center><div style= "border: 1px solid #3b3d4a; width:500px; margin-top:45px; padding:5px;
margin-bottom:100px; border-radius: 31px 31px 31px 31px;
moz-border-radius: 31px 31px 31px 31px;
webkit-border-radius: 31px 31px 31px 31px; border: 5px solid #000000;">    

<h1>Registrar Cotización</h1>

                    <form action="" method="post">
                    

                    
                    <label class="col-form-label">ID Agenda Cita</label>
                    <input style="-moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        padding: 0 4px 0 4px;"  type="text" class="form-control" name="idAgenda" id="agenda" placeholder="" required="">
                    
                    <label class="col-form-label">Nombre Producto</label>
				    <input style="-moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        padding: 0 4px 0 4px;"  type="text" class="form-control" name="nombreProducto" id="nombreProducto" placeholder="" required="">
		
                    

			        <label class="col-form-label">Fecha</label>
				    <input style="-moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        padding: 0 4px 0 4px;"  type="date" class="form-control" name="fecha" id="correo" placeholder="" required="">
					
					
					<label class="col-form-label">Descuento</label>
			    	<input style="-moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        padding: 0 4px 0 4px;"  type="text" class="form-control" name="descuento" id="ubicacion" placeholder="" required="">
                    
					
					<label class="col-form-label">Total</label>
					<input style="-moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        padding: 0 4px 0 4px;"  type="number" min="0" class="form-control" name="total" id="telefono" placeholder="" required="">
                    
                 <br>
                    
                    <input type="submit" class="btn btn-success" value="Registrar" name="registrar">
                    
</form>
</div>
</div>

</center>

</body>

<?php
if (isset($_POST["registrar"])) {

    $cotizacion->__SET('idAgenda',$_POST["idAgenda"]);
    $cotizacion->__SET('nombreProducto',$_POST["nombreProducto"]);
    $cotizacion->__SET('fecha',$_POST["fecha"]);
    $cotizacion->__SET('descuento',$_POST["descuento"]);
    $cotizacion->__SET('total',$_POST["total"]);


    if($control->Insertar($cotizacion)){
        echo "<script>alert('Datos ingresados con éxito')</script>";
    }
} //else{
  //echo "<br>Ingresa los datos y presione el botón registrar";
//}

?>

</html>