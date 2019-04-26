<?php

include_once "../../../Controlador/personaController.php";
include_once "../../../Modelo/personaModel.php";
$control = new PersonaController();
$usuario = new PersonaModel();
?>
  <?php
            $control->validar();
            ?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Jornan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Vicarage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="../css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet"><!-- //online-fonts -->
</head>
<body>
    <!-- banner -->
    <div class="banner">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="index.html">
                        Jornan
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="index.php">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="gallery.php">Galería</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contáctanos</a>
                        </li>
                        <li>
                        <button type="button" class="btn btn-primary" data-toggle="modal" href="registar.php" style="background:#865729" >Regístrate
  
</button>
          </li>

						
                    </ul>
                </div>
            </nav>
        </header>
        
        <div class="container">
            <!-- banner-text -->
            <div class="banner-text">
                <div class="slider-info">
						<img src="../img/icono.png" class="icono" width="80px">


                    <h3>Tradición Y Modernidad</h3>
                   
                </div>
            </div>
        </div>
    </div>
   
<div class="col-md-12" style="display: flex;
  justify-content: center;
  align-items: center;float:left;">
                    <form action="" method="post">
					<label class="col-form-label" style="float:left;">No. identificación</label>
					<input type="number"  min="0" class="form-control" name="idPersona" id="ced" placeholder="" required="">
                    <label class="col-form-label" style="float:left;">Id Tipo Persona</label>
                    <input  type="number"  min="0" class="form-control" name="idTipoPersona" id="validationDefault01" placeholder="" hidden>
                    <br>
                    <label class="col-form-label" style="float:left;">Nombres</label>
                    <input   type="text" class="form-control"  name="nombre" id="validationDefault01" placeholder="" required="">
                 
                    
                  
                     <label class="col-form-label">Apellidos</label>
                    <input  type="text" class="form-control" name="apellidos" id="validationDefault02" placeholder="" required="">
             
					<label class="col-form-label">Correo Electrónico</label>
				    <input  type="text" class="form-control" name="correo" id="correo" placeholder="" required="">
					
					
					<label class="col-form-label">Ubicación</label>
			    	<input  type="text" class="form-control" name="direccion" id="ubicacion" placeholder="" required="">
                    
                    
					
					
					
					<label class="col-form-label">Teléfono</label>
					<input type="number" min="0" class="form-control" name="telefono" id="telefono" placeholder="" required="">
                   
                    
                    <label class="col-form-label">Contraseña</label>
                    <input  type="password" class="form-control" name="password" id="password1" placeholder="" required="">
                    <br>

                   
                    <input type="submit" class="btn btn-success" value="Registrar" name="registrar">
                    </div> 
</form>
</div>