<?php
// session_start();
// error_reporting(0);
// $varsesion=$_SESSION['usuario'];
// if ($varsesion== null || $varsesion=='') {
//     echo 'Usted no tiene autorización';
//     die();
// } 
require_once "../../../Controlador/proveedorController.php";
include_once "../../../Modelo/proveedorModel.php";
$control = new ProveedorController();
$proveedor = new ProveedorModel();
$resultado= $control->Buscar($_GET["idProveedor"]);
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
<body style=" background: #cecece; "  >
<center>
<div class="container-contact100" style=" background: #FFFBF6;">
		<div class="container" >
			<form class="contact100-form validate-form" method="POST" style="width: 70%;" id="formRegistrar">
				<span class="contact100-form-title">
					Actualizar Proveedor
				</span>

                <label class="label-input100" for="documento">idProveedor<span style="color:red;"> *</span></label>
				<div class="wrap-input100 validate-input" data-validate = "El id del proveedor es requerido">
					<input id="documento" class="input100" type="text" name="nombre" placeholder="Digite el nombre" value="<?php echo $resultado->idProveedor; ?> " disabled>
					<span class="focus-input100" style="border: 1px solid #000000" ></span>
				</div>

				<label class="label-input100" for="documento">Nombre Proveedor<span style="color:red;"> *</span></label>
				<div class="wrap-input100 validate-input" data-validate = "El nombre es requerido">
					<input id="documento" class="input100" type="text" name="nombre" placeholder="Digite el nombre" value="<?php echo $resultado->nombre; ?> ">
					<span class="focus-input100" style="border: 1px solid #000000" ></span>
				</div>
				

				<label class="label-input100" for="first-name">Razón social y Nit <span style="color:red;"> *</span></label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="La razón social es obligatoria">
					<input id="first-name" class="input100" type="text" name="razonSocial" placeholder="Razón Social" value="<?php echo $resultado->razonSocial; ?> ">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="El NIT obligatorio" value="<?php echo $resultado->nit; ?> ">
					<input class="input100" type="text" name="nit" placeholder="NIT">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div></label>
				

				<label class="label-input100" for="email">Telefono <span style="color:red;"> *</span></label>
				<div class="wrap-input100 validate-input" data-validate = "El telefono es obligatorio">
					<input id="email" class="input100" type="text" name="telefono" placeholder="Telefono" value="<?php echo $resultado->telefono; ?> ">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>

				<label class="label-input100" for="contraseña">Fax<span style="color:red;"> *</span></label>
				<div class="wrap-input100  validate-input" data-validate="El fax es obligatorio">
					<input id="contraseña" class="input100" type="text" name="fax" placeholder="Fax" value="<?php echo $resultado->fax; ?> ">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>
				
                <label class="label-input100" for="contraseña">Direccion<span style="color:red;"> *</span></label>
				<div class="wrap-input100  validate-input" data-validate="La dirección es obligatoria">
					<input id="contraseña" class="input100" type="text" name="direccion" placeholder="Dirección" value="<?php echo $resultado->direccion; ?> ">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>

				<label class="label-input100" for="dir">Representante legal y telefono representante<span style="color:red;"> *</span></label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="El nombre es obligatorio">
					<input id="dir" class="input100" type="text" name="representanteLegal" placeholder="Representante Legal" value="<?php echo $resultado->representanteLegal; ?> ">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="El telefono es obligatorio">
					<input class="input100" type="text" maxlength="10" name="telefonoRepresentante" placeholder="Teléfono representante" value="<?php echo $resultado->telefonoRepresentante; ?> ">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>
				
				<div class="container-contact100-form-btn">
				<input type="submit" class="btn btn-dark" value="Actualizar" name="Actualizar" id="actualizar" style='width:700px; height:38px'>
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
    $proveedor->__SET('idProveedor',$_POST["idProveedor"]);
    $proveedor->__SET('nombre',$_POST["nombre"]);
    $proveedor->__SET('razonSocial',$_POST["razonSocial"]);
    $proveedor->__SET('nit',$_POST["nit"]);
    $proveedor->__SET('telefono',$_POST["telefono"]);
    $proveedor->__SET('fax',$_POST["fax"]);
    $proveedor->__SET('direccion',$_POST["direccion"]);
    $proveedor->__SET('representanteLegal',$_POST["representanteLegal"]);
    $proveedor->__SET('telefonoRepresentante',$_POST["telefonoRepresentante"]);

    if($control->actualizar($proveedor)){
        echo "<script>alert('Datos ingreasdos con éxito')</script>";
    }
} else{
  echo "";
}

?>

</html>