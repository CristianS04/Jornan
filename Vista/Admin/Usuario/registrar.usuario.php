<?php
// session_start();
// error_reporting(0);
// $varsesion=$_SESSION['usuario'];
// if ($varsesion== null || $varsesion=='') {
//     echo 'Usted no tiene autorización';
//     die();
// } 
require_once "../../../Controlador/personaController.php";
require_once "../../../Modelo/personaModel.php";
$control = new PersonaController();
$usuario = new PersonaModel();

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
   <!--===============================================================================================-->
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
<script language="javascript" type="text/javascript" src="../js2/jquery.flot.js"></script>
<script src="../js2/menu_jquery.js"></script>

</head>
<?php
include_once "../head-admin.php";
?>
<body style=" background: #FFFBF6; "  >
<center><div class="container-contact100" style=" background: #FFFBF6;">
		<div class="container" >
			<form class="contact100-form validate-form" method="POST" style="width: 70%;" id="formRegistrar">
				<span class="contact100-form-title">
					Registrar Usuario
				</span>
				<label class="label-input100" for="documento">Documento <span style="color:red;"> *</span></label>
				<div class="wrap-input100 validate-input" data-validate = "El documento es requerido">
					<input id="documento" class="input100" type="number" name="idpersona" placeholder="Digite el documento" min="1">
					<span class="focus-input100" style="border: 1px solid #000000" ></span>
				</div>
				

				<label class="label-input100" for="first-name">Nombres Y Apellidos <span style="color:red;"> *</span></label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="El nombre es obligatorio">
					<input id="first-name" class="input100" type="text" name="nombres" placeholder="Nombres">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Los apellidos son obligatorios">
					<input class="input100" type="text" name="apellidos" placeholder="Apellidos">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div></label>
				

				<label class="label-input100" for="email">Correo Electrónico <span style="color:red;"> *</span></label>
				<div class="wrap-input100 validate-input" data-validate = "Correo electrónico es requerido: ejemplo@correo.com">
					<input id="email" class="input100" type="text" name="correo" placeholder="Ej. ejemplo@correo.com">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>

				<label class="label-input100" for="contraseña">Contraseña y confirmación de contraseña <span style="color:red;"> *</span></label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="La contraseña es obligatoria">
					<input id="contraseña" class="input100" type="password" name="password" placeholder="Contraseña">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Confirme la contraseña">
					<input class="input100" type="password" name="confpassword" placeholder="Confirmación contraseña">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>

				<label class="label-input100" for="dir">Direccion y teléfono <span style="color:red;"> *</span></label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="La direccion es obligatoria">
					<input id="dir" class="input100" type="text" name="direccion" placeholder="Dirección">
					<span class="focus-input100" style="border: 1px solid #000000"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="El telefono es obligatorio">
					<input class="input100" type="number" maxlength="10" name="telefono" placeholder="Teléfono" >
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
</div>
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
</body>
<?php
if (isset($_POST["registrar"])){
	if ($_POST['password'] == $_POST['confpassword']){
		$usuario->__SET('idPersona',$_POST["idpersona"]);
    	$usuario->__SET('idTipoPersona',2);
		$usuario->__SET('nombre',$_POST["nombres"]);
		$usuario->__SET('apellidos',$_POST["apellidos"]);
		$usuario->__SET('correo',$_POST["correo"]);
		$usuario->__SET('direccion',$_POST["direccion"]);
		$usuario->__SET('estado',1);
		$usuario->__SET('telefono',$_POST["telefono"]);
		$usuario->__SET('password',hash("sha1",$_POST["password"]));
    if($control->Insertar($usuario)){
		echo "<script>alert('datos ingresados con éxito');</script>";
		?>
		<script>
		location.href = "listar.usuario.php";
		</script>

	<?php 
        
    	}	
	} else {
		?>
		<script>

		alert('Las claves no coinciden');
		location.href = "registrar.usuario.php";
		</script>

	<?php 
	} 
}

?>

</html>