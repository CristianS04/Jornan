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
<link href="../css2/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="../PlantList/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantList/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantList/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantList/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantList/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantList/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../PlantList/css/util.css">
	<link rel="stylesheet" type="text/css" href="../PlantList/css/main.css">
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
<div class="limiter">
		<div class="container-table100"style=" background: #FFFBF6">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
              <th scope="column1"><center>idInsumo</center> </th>
              <th scope="column2"><center>idProveedor</center></th>
              <th scope="column2"><center>Nombre</center></th>
              <th scope="column3"><center>Valor</center></th>
              <th scope="column4"><center>Cambios</center> </th>
              <th scope="column5"><center>Eliminar</center></th>
							</tr>
						</thead>
						<tbody>
								<tr>
                <?php foreach ($control->listar() as $fila):?> 
                <td class="column1"><center><?php echo $fila->__GET('idInsumo'); ?></center></td>
                <td class="column1"><center><?php echo $fila->__GET('idProveedor'); ?></center></td>
                <td class="column3"><center><?php echo $fila->__GET('nombre'); ?></center></td>
                <td class="column4"><center><?php echo $fila->__GET('valor'); ?></center></td>
                <th class="column6"><a class="btn btn-primary"  href="editar.insumo.php?idInsumo=<?php echo $fila->idInsumo;?>">Editar</a></th>
                <th class="column7"><center><button class="btn btn-danger" href="eliminar.insumo.php?idAbono=<?php echo $fila->idInsumo;?>" >Eliminar</button></center></th>
								</tr> <?php endforeach; ?>
									
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


<div class="container" style="border: 1px solid black; width:800px; margin-top:45px; padding:10px; border-radius: 31px 31px 31px 31px;
margin-bottom:100px; border: 5px solid #000000;"> 
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID Insumo</th>
      <th scope="col">ID Proveedor</th>
      <th scope="col">Nombre</th>
      <th scope="col">Valor</th>
      <th scope="col">Cambios</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($control->listar() as $fila):?> 
     <td><?php echo $fila->__GET('idInsumo'); ?></td>
     <td><?php echo $fila->__GET('idProveedor'); ?></td>
     <td><?php echo $fila->__GET('nombre'); ?></td>
     <td><?php echo $fila->__GET('valor'); ?></td>
     <th><a class="btn btn-primary" href="editar.insumo.php?idInsumo=<?php echo $fila->idInsumo;?>">Editar</a>
     <a class="btn btn-danger" href="eliminar.insumo.php?idInsumo=<?php echo $fila->idInsumo;?>">Eliminar</a></th>

</tr>
<?php  endforeach; ?>

</table>

</body>
<!--===============================================================================================-->	
<script src="../PlantList/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../PlantList/vendor/bootstrap/js/popper.js"></script>
	<script src="../PlantList/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../PlantList/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../PlantList/js/main.js"></script>
</html>