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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background:#865729" >Iniciar Sesión
  
</button>
          </li>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  <form method="post">
      <div class="modal-body">
	  <div class="form-group" >
    <label for="exampleInputEmail1">Correo Electrónico</label>
    <input type="email" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary" style ="background:#865729">Iniciar Sesión</button>
  <button type="button" class="btn btn-primary" style="background:#865729" href="registrar.php">Regístrate aquí</button>

  
      </div>

    </div>
  </div>
</div>
	</form>  
						
                    </ul>
                </div>
            </nav>
        </header>
        <!-- //header -->
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
	<section class="wthree-row w3-about  py-5">
		<div class="container py-md-4 mt-md-3">
			<h3 class="heading-agileinfo">Ebanistería <span>Jornan</span></h3>
			<div class="card-deck mt-md-5 pt-5">
				  <div class="card">
					<img src="../img/g1.jpg" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Distinción</h5>
					  <p class="card-text mb-3">La ebanistería se distingue de la carpintería en que produce muebles más elaborados, generando nuevas técnicas y complementándolas con otras para la manufactura de algunas piezas, tales como la marquetería, la talla, el torneado y la taracea, entre otras técnicas. 
						</p>
						<div class="ab_button">
							
						</div>
					</div>
				  </div>
				  <div class="card">
					<img src="../img/g2.jpg" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Renovación</h5>
					   <p class="card-text mb-3 ">Aún sin ser característica propia el uso de algún material específico, la ebanistería busca desarrollar muebles de mejor calidad y diseño. Este es el oficio que acompaña el proceso de diseño del mobiliario, ya sea comercial o doméstico.</p>
						<div class="ab_button">
							
						</div>
					</div>
				  </div>
				  <div class="card">
					<img src="../img/g3.jpg" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Técnica</h5>
					   <p class="card-text mb-3 ">La ebanistería se distingue de la carpintería en que produce muebles más elaborados, generando nuevas técnicas y complementándolas con otras para la manufactura de algunas piezas, tales como la marquetería, la talla, el torneado y la taracea, entre otras técnicas.</p>
						<div class="ab_button">
						</div>
					</div>
				  </div>
			</div>
        </div>
    </section>
	<div class="clients py-5">
		<div class="container py-md-4 mt-md-3">
				<h3 class="heading-agileinfo">Nuestros  <span>servicios</span></h3>
				<section class="slider mt-md-5 pt-5">
				<p class="text-dark" > Aliquam ac est vel nisl condimentum interdum vel eget enim. Curabitur mattis orci sed leo mattis, nec maximus nibh faucibus.
						Mauris et justo vel nibh rhoncus venenatis. Nullal condimentum interdum vel eget enim. Curabitur mattis orci sed le.
					</p> 
			</section>
		</div>
	</div>
<!-- //Clients -->
 <!-- newsletter-->
    <div class="newsletter text-center py-lg-5">
        <div class="container py-5">
            <h3 class="heading-agileinfo">Contáctanos <a href="contact.html"><span class="text-white">Aquí</span></a></h3>
           <div class="newsletter-inner">
				<p class="text-light py-4">Aliquam ac est vel nisl condimentum interdum vel eget enim. Curabitur mattis orci sed leo mattis, nec maximus nibh faucibus.
						Mauris et justo vel nibh rhoncus venenatis. Nullal condimentum interdum vel eget enim. Curabitur mattis orci sed le.
					</p> 
			</div>					
		
            
        </div>
    </div>
    <!-- //newsletter-->

	<!-- video and events -->
	
	<!-- //video and events -->
	<!-- Footer -->
		<footer id="footer" class="py-5">
			<div class="container">
				<div class="row  py-lg-5">
					<div class="col-lg-3 col-sm-6 footer-logo">
						<h5>Ebanistería</h5>
						<h2>
							
						</h2>
						<p class="mt-3">Nulla quis lorem ut libermalesuada ultrices posuere cubilia feugiatrice praesent sapien massa</p>
					</div>
					<div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
						<h5>Jornan</h5>
						<ul class="list-unstyled quick-links">
							<li>
								<a href="index.php">
								<i class="fa fa-angle-double-right"></i>Inicio</a>
							</li>
						
							<li>
								<a href="gallery.php">
									<i class="fa fa-angle-double-right"></i>Galería</a>
							</li>
							<li>
								<a href="contact.php">
									<i class="fa fa-angle-double-right"></i>Contacto</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0624881183553!2d-75.5775584852307!3d6.255498395472096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429020d4090d3%3A0xd9dc5f94adc65133!2sSENA+-+Regional+Antioquia.!5e0!3m2!1ses!2sco!4v1554877030605!5m2!1ses!2sco" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-lg-3 col-sm-6 footer_grid1 mt-lg-0 mt-4">
						<h5>Información</h5>
						<div class="fv3-contact">
							<span class="fas fa-envelope-open mr-2"></span>
							<p>
								<a href="mailto:example@email.com">jornan@hotmail.com</a>
							</p>
						</div>
						<div class="fv3-contact my-2">
							<span class="fas fa-phone-volume mr-2"></span>
							<p>+57 034123456</p>
						</div>
						<div class="fv3-contact">
							<span class="fas fa-home mr-2"></span>
							<p>+57 12345678910,
								<br>Medellín, Colombia.</p>
								
						</div>
						
					</div>
				</div>
			</div>
			
		</footer>
		<div class="cpy-right text-center py-4">
			<p class="text-white">© 2018 Jornan. Todos los derechos reservados 
				
			</p>
		</div>
	</div>
	<!-- /Footer -->

	<!-- login  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
					<img class="logo" src="images/Logo.png" width="150px">
                    <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               
            </div>
        </div>
    </div>
    <!-- //login -->
	 <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="modal-title">Regístrate</h5>
                        <div class="registro" action="#" method="post">
						
                            <div class="left margin">
                                <label class="col-form-label">Nombres</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="left">
                                <label class="col-form-label">Apellidos</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
							</div>
						</div>
							<div class="right">
									<label class="col-form-label">No. identificación</label>
									<input type="ced" class="form-control" id="ced" placeholder="" required="">
								</div> 
								<div class="right">
										<label class="col-form-label">Correo Electrónico</label>
										<input type="correo" class="form-control" id="correo" placeholder="" required="">
									</div> 
									<div class="right">
											<label class="col-form-label">Ubicación</label>
											<input type="ubicacion" class="form-control" id="ubicacion" placeholder="" required="">
										</div>
								<div class="right">
										<label class="col-form-label">Teléfono</label>
										<input type="telefono" class="form-control" id="telefono" placeholder="" required="">
									</div>
						
							
									

                            <div class="left">
                                <label class="col-form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="left">
                                <label class="col-form-label">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
							</div>
					
                    </div>
						
			
                </div>
				<div class="reg-w3l">
						<button type="submit" class="form-control submit mb-4">Registrarme</button>
				   </div>
				   <p class="text-center pb-4">
						<a href="#" class="text-secondary">Al cliquear aquí, estás aceptando los términos y condiciones.</a>
					</p>
			   
	
			</div>
			</div>
		
		</div>
		
    </div>
    <!--//Register-->

    <!-- //footer -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
	<!-- FlexSlider-JavaScript -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
<!-- //FlexSlider-JavaScript -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
  
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
	</div>
</body>
</html>