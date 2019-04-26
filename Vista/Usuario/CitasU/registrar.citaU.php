<?php


session_start();
error_reporting(0);
$varsesion=$_SESSION['usuario'];
if ($varsesion== null || $varsesion=='') {
    echo 'Usted no tiene autorización';
    die();
} 
require_once "../../../Controlador/citasController.php";
require_once "../../../Controlador/tipocitaController.php";
require_once "../../../Modelo/citasModel.php";
require_once "../../../Modelo/tipocitaModel.php";
$control = new CitasController();
$control2 = new TipocitaController();
$citas = new CitasModel();
$tipo = new TipocitaModel();
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
<h1>Registrar Cita</h1>
<div class="col-md-12">
                    <form action="" method="post">
                    

                   
					<label class="col-form-label">Id Tipo de Cita</label>
                    <select style="-moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        padding: 0 4px 0 4px;"  name="idTipoCita" class="form-control">
                    <option value="0">Seleccione una opcion</option>
                    <?php
                         foreach ($control2->ConsulTipo() as $fila) {
                         echo "<option value='".$fila->__GET('idTipoCita')."'>".$fila->__GET('nombre')."</option>";
                         };
                     ?>
                    </select>
                   
                    
                    <label class="col-form-label">Id Persona</label>
                    <input style="-moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        padding: 0 4px 0 4px;"  type="number" min="0" class="form-control"  name="idPersona" id="validationDefault01" placeholder="" required="">
                    
                    
                     <label class="col-form-label">Fecha de la cita</label>
                    <input style="-moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        padding: 0 4px 0 4px;"  type="date" class="form-control" name="fecha" id="validationDefault02" placeholder="" required="">
                    	
                    <div class="row">
                    <div class="col-md-6">
					
					<label class="col-form-label">Hora Fin</label>
				    <input style="-moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        padding: 0 4px 0 4px;"  type="time" class="form-control" name="horaFin" id="correo" placeholder="" required="">
					</div> 
                    
                    <div class="col-md-6">
					
					<label class="col-form-label">Hora Inicio</label>
			    	<input style="-moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        padding: 0 4px 0 4px;"  type="time" class="form-control" name="horaInicio" id="ubicacion" placeholder="" required="">
                    
                    </div>
                    </div>
                    </div>
					
					<label class="col-form-label">Dirección</label>
					<input style="-moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        padding: 0 4px 0 4px;"  type="text" class="form-control" name="direccion" id="telefono" placeholder="" required="">
                    
                    
					<label class="col-form-label">Estado</label>
					<input style="-moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        padding: 0 4px 0 4px;" type="number" min="0" class="form-control" name="estado" id="telefono" placeholder="" required="">
                    <br>

                   
                    <input type="submit" class="btn btn-success" value="Registrar" name="registrar">
                    
</form>
</div>
</div></center>
</body>
<?php
if (isset($_POST["registrar"])) {
    $citas->__SET('idTipoCita',$_POST["idTipoCita"]);
    $citas->__SET('idPersona',$_POST["idPersona"]);
    $citas->__SET('fecha',$_POST["fecha"]);
    $citas->__SET('horaFin',$_POST["horaFin"]);
    $citas->__SET('horaInicio',$_POST["horaInicio"]);
    $citas->__SET('direccion',$_POST["direccion"]);
    $citas->__SET('estado',1);

    if($control->Insertar($citas)){
        echo "<script>alert('Datos ingresados con éxito')</script>";
    }
} //else{
  //echo "<br>Ingresa los datos y presione el botón registrar";
//}

?>

</html>