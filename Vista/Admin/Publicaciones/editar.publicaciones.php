<?php
require_once "../../../Controlador/publicacionesController.php";
require_once "../../../Modelo/publicacionesModel.php";
$control = new PublicacionesController();
$publicacion = new PublicacionesModel();

$resultado= $control->Buscar($_GET["idPublicacion"]);

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
include_once "../head-admin.php";
?>
<body class="content" style=" background: #cecece; "  >
<center><div class="container">    
<h1>Actualizar Publicacion</h1>
<div class="col-md-6">
                    <form action="" method="post">
                    <div class="registro" action="#" method="post">

                    <div class="right">
					<label class="col-form-label">Identificación de la Publicación</label>
					<input type="number" min="0" class="form-control" name="idPublicacion" id="ced" placeholder="" value="<?php echo $resultado->idPublicacion; ?> " disabled>
                    </div> 
                    <div class="left margin">
                    <label class="col-form-label">Identificación de la Persona</label>
                    <input type="number" min="0"  class="form-control" name="idPersona" id="validationDefault01" placeholder="" value="<?php echo $resultado->idPersona; ?>">
                    </div>
                    <div class="left margin">
                    <label class="col-form-label">Fecha de la Publicación</label>
                    <input type="date" class="form-control"  name="fecha" id="validationDefault01" placeholder="" required="" value="<?php echo $resultado->fecha; ?>" >
                    </div>
                    <div class="left">
                     <label class="col-form-label">Estado</label>
                    <input type="text" class="form-control" name="estado" id="validationDefault02" placeholder="" required="" value="<?php echo $resultado->estado; ?>">
                    </div>	
					<div class="right">
					<label class="col-form-label">Imagen</label>
				    <input type="text" class="form-control" name="imagen" id="correo" placeholder="" required="" value="<?php echo $resultado->imagen; ?>">
					</div> 
					<div class="right">
					<label class="col-form-label">Descripción</label>
			    	<input type="text" class="form-control" name="descripcion" id="ubicacion" placeholder="" required="" value="<?php echo $resultado->descripcion; ?>">
                    </div>
                    <br>

                    <div>
                    <input type="submit" class="btn btn-success" value="Actualizar" name="Actualizar">
                    </div>
</form>
</div>
</div></center>
</body>
<?php
if (isset($_POST["Actualizar"])) {
    $publicacion->__SET('idPublicacion',$_GET["idPublicacion"]);
    $publicacion->__SET('idPersona',$_POST["idPersona"]);
    $publicacion->__SET('fecha',$_POST["fecha"]);
    $publicacion->__SET('estado',$_POST["estado"]);
    $publicacion->__SET('imagen',$_POST["imagen"]);
    $publicacion->__SET('descripcion',$_POST["descripcion"]);

    if($control->Actualizar($publicacion)){
        echo "<script>alert('Datos actualizados con éxito')</script>";
    }
} else{
  echo "<br>Ingresa los datos y presione el botón actualizar";
}

?>

</html>