<?php
// session_start();
// error_reporting(0);
// $varsesion=$_SESSION['usuario'];
// if ($varsesion== null || $varsesion=='') {
//     echo 'Usted no tiene autorización';
//     die();
// } 
require_once "../../../Controlador/cotizacionController.php";
require_once "../../../Controlador/citasController.php";
require_once "../../../Modelo/cotizacionModel.php";
require_once "../../../Modelo/citasModel.php";
$control = new CotizacionController();
$cotizacion = new CotizacionModel();
$control2 = new citasController();
$tipo = new citasModel();


date_default_timezone_set('America/Bogota');
$fecha_actual=date("Y-m-d");
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
<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
<script src="../../../ajax/cotizacion.js"></script>	
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
<link rel="icon" type="image/png" href="../PlantForm/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantForm/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantForm/css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantForm/css/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantForm/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantForm/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantForm/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantForm/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantForm/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantForm/css/util.css">
	<link rel="stylesheet" type="text/css" href="../PlantForm/css/main.css">
<!--===============================================================================================-->
 
</head>

<?php
include_once "../head-admin.php";
?>
<body style=" background: #cecece; "  >
<center>
<div class="container-contact100" style=" background: #FFFBF6;">
		<div class="container" >
			<form class="contact100-form validate-form" method="POST" style="width: 70%;" id="formRegistrar">
				<span class="contact100-form-title">
					Registrar Cotización
				</span>
				<div class="col-md-4">
				<label class="label-input100" for="documento">Id Cita <span style="color:red;"> *</span></label>
				<div class="wrap-input100 validate-input" data-validate = "El id de la cita es obligatorio">
                <select  name="idAgenda" class="form-control">
                    <option value="0">Seleccione una opción</option>
                    <?php
                         foreach ($control2->ConsulAgenda() as $fila) {
                         echo "<option value='".$fila->__GET('idTipoCita')."'>".$fila->__GET('idAgendaCita')."</option>";
                         };
                     ?>
                    </select>
                   
					<span class="focus-input100" style="border: 1px solid #000000" ></span>
				</div>
				</div>
				<div class="col-md-4">
				<label class="label-input100" for="first-name">Nombre Poducto<span style="color:red;"> *</span></label>
				<div class="wrap-input100  validate-input" data-validate="El nombre del producto es obligatorio">
					<input id="nombreProducto" class="input100" type="text" name="nombreProducto" placeholder="Nombre del producto">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div></div>
				
				
					<input id="fecha" class="input100" type="date" name="fecha" placeholder="YYYY/MM/DD" value="<?= $fecha_actual?>" hidden>
					
				
				<div class="col-md-4">
				<label class="label-input100" for="contraseña">Descuento<span style="color:red;"> *</span></label>
				<div class="wrap-input100  validate-input" data-validate="Si no hay descuento escriba 0">
					<input id="descuento" class="input100" type="number" name="descuento" placeholder="Descuento" min=0 max=100>
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div></div>

				<div class="container">
				
				<h3 class="h3">Insumos:</h3>
			<!-- Button trigger modal -->
				<button type="button" id="cargarP" class="btn-sm pt-0 pb-0 btn-primary" style="height: 40px; margin:auto" data-toggle="modal" data-target="#exampleModalScrollable">
				Insertar Insumos
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalScrollableTitle">Mostrar Productos</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<table id="grid" class="table table-striped table-bordered nowrap" style="width:100%">
						<thead style="background-color: #000000;color: white; font-weight: bold;">
							<tr>
							<td width="10%">Nombre</td>
							<td width="1%">Valor</td>
							<td width="10%">Cantidad</td>
							<td width="10%">Acciones</td>
							</tr>
						</thead>
						<tbody id="product">
						
						</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
					</div>
				</div>
				</div>
				<table class="table">
					<thead>
						<tr>
						<th scope="col">Nombre</th>
						<th scope="col">Cantidad</th>
						<th scope="col">Valor</th>
						</tr>
					</thead>
					<tbody id="insumo">
					
					</tbody>
					</table>

					</div>
				
				<label class="label-input100" for="dir">Total<span style="color:red;"> *</span></label>
				<div class="wrap-input100  validate-input" data-validate="El total es obligatorio">
					<input id="dir" class="input100" type="number" name="total" placeholder="Total" readonly>
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>

				<div class="container-contact100-form-btn">
				<input type="submit" class="btn btn-dark" value="Registrar" name="registrar" id="registrar" style='width:700px; height:38px'>
				</div>
			</form>
				</div>
			</div>
	 <br><br>
         

        </form>

</center>

</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--===============================================================================================-->
<script src="../PlantForm/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../PlantForm/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../PlantForm/vendor/bootstrap/js/popper.js"></script>
	<script src="../PlantForm/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../PlantForm/vendor/select2/select2.min.js"></script>
	<script>
		$(document).on('click', '#registrar', function(e){
        	e.preventDefault();
		}
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="../PlantForm/vendor/daterangepicker/moment.min.js"></script>
	<script src="../PlantForm/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../PlantForm/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../PlantForm/js/main.js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<?php
if (isset($_POST["registrar"])) {

    $cotizacion->__SET('idAgenda',$_POST["idAgenda"]);
    $cotizacion->__SET('nombreProducto',$_POST["nombreProducto"]);
    $cotizacion->__SET('fecha',$_POST["fecha"]);
    $cotizacion->__SET('descuento',$_POST["descuento"]);
    $cotizacion->__SET('total',$_POST["total"]);
    $cotizacion->__SET('subtotal', 0);
    $cotizacion->__SET('estado',1);

    if($control->Insertar($cotizacion)){
		echo "<script>alert('Datos ingresados con éxito')</script>";
		?>
		<script>
		location.href = "listar.cotizacion.php";
		</script>

	<?php 
    }else{

	}
} //else{
  //echo "<br>Ingresa los datos y presione el botón registrar";
//}

?>

</html>