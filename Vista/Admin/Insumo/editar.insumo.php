<?php
// session_start();
// error_reporting(0);
// $varsesion=$_SESSION['usuario'];
// if ($varsesion== null || $varsesion=='') {
//     echo 'Usted no tiene autorización';
//     die();
// } 
require_once "../../../Controlador/InsumoController.php";
require_once "../../../Modelo/insumoModel.php";
$control = new InsumoController();
$insumo = new InsumoModel();

$resultado= $control->Buscar($_GET["idInsumo"]);

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
include_once "../head-admin.php";
?>
<body  style=" background: #cecece; "  >
<center>
<div class="container-contact100" style=" background: #FFFBF6;">
		<div class="container" >
			<form class="contact100-form validate-form" method="POST" style="width: 70%;" id="formRegistrar">
				<span class="contact100-form-title">
					Actualizar insumo
				</span>

                <label class="label-input100" for="email">idInsumo<span style="color:red;"> *</span></label>
				<div class="wrap-input100 validate-input" data-validate = "El id del proveedor es obligatoria">
					<input id="email" class="input100" type="text" name="idInsumo" placeholder="Id proveedor" value="<?php echo $resultado->idInsumo; ?> " disabled>
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>

                <label class="label-input100" for="email">idProveedor<span style="color:red;"> *</span></label>
				<div class="wrap-input100 validate-input" data-validate = "El id del proveedor es obligatoria">
					<input id="email" class="input100" type="text" name="idProveedor" placeholder="Id proveedor" value="<?php echo $resultado->idProveedor; ?> " disabled>
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>

				<label class="label-input100" for="email">Nombre<span style="color:red;"> *</span></label>
				<div class="wrap-input100 validate-input" data-validate = "El nombre es obligatorio">
					<input id="email" class="input100" type="text" name="nombre" placeholder="Nombre" value="<?php echo $resultado->nombre; ?>">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>


				<label class="label-input100" for="dir">Valor<span style="color:red;"> *</span></label>
				<div class="wrap-input100  validate-input" data-validate="El valor es obligatoria">
					<input id="dir" class="input100" type="number" name="valor" placeholder="Valor" min=1 value="<?php echo $resultado->valor; ?>">
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

if (isset($_POST["Actualizar"])) {
    $insumo->__SET('idInsumo',$_GET["idInsumo"]);
    $insumo->__SET('idProveedor',$_POST["idProveedor"]);
    $insumo->__SET('nombre',$_POST["nombre"]);
    $insumo->__SET('valor',$_POST["valor"]);
  

    if($control->Actualizar($insumo)){
        echo "<script>alert('Datos ingresados con éxito')</script>";

        ?>
        <script>
        location.href="listar.insumo.php";
        </script>
        <?php
    }
} else{
  echo "";
}

?>

</html>