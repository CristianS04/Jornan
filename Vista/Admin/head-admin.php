

<header>



 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
</head> 
<body>
   <div class="page-container" style="background-color: #828282;">
   <!--/content-inner-->
	<div class="left-content" style="background-color: #828282;">
	   <div class="inner-content" style="background-color: #828282;">
		<!-- header-starts -->
			<div class="header-section" >
			<!-- top_bg -->
						<div class="top_bg" style="background-color: #000000;">
							
								<div class="header_top">
									
									<div class="top_left" >
									<a href="../../../Modelo/cerrarSesion.php" style="color: #FFFFFF; background: #000000; text-decoration: none">Cerrar sesion <i class="fas fa-power-off"></i></a>
									</div>
										<div class="clearfix"> </div>
								</div>
							
						</div>
					<div class="clearfix"></div>
				<!-- /top_bg -->
				</div>
			
					<!-- //header-ends -->
				
				<!--content-->
		
			<!--content-->
		</div>
</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu" style="background-color: #606060;">
					<header class="logo1"  style="background-color: #606060;">
						
						<a href="#"  class="sidebar-icon"> <img src="../images/icono1.png" alt=""> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)" style="background-color: #606060;"></div>
                           <div class="menu" >
									<ul id="menu" style="background-color: #606060;">
									<li  id="menu-academico" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="#"><i class="fas fa-users"></i> <span >Usuarios</span> <span class="fas fa-angle-right" style="float: right; "></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Usuario/registrar.usuario.php">Registrar usuario</a></li>
											<li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Usuario/listar.usuario.php">Consultar usuario</a></li>
										  </ul>
										</li>										 
										<li id="menu-academico" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="#"><i class="fas fa-calendar-week"></i> <span>Citas</span> <span class="fas fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Citas/registrar.cita.php">Registrar cita</a></li>
											<li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Citas/listar.cita.php">Consultar cita</a></li>
										  </ul>
										</li>
										<li id="menu-academico" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="#"><i class="fas fa-book"></i> <span>Cotizacion</span> <span class="fas fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Cotizacion/registrar.cotizacion.php">Registrar cotizacion</a></li>
											<li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Cotizacion/listar.cotizacion.php">Consultar consultar</a></li>
										  </ul>
										</li>
										<li id="menu-academico" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="#"><i class="fas fa-tools"></i> <span>Orden de Producción</span> <span class="fas fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Orden/registrar.orden.php">Registrar orden</a></li>
											<li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Orden/listar.orden.php">Consultar orden</a></li>
										  </ul>
										</li>
										<li id="menu-academico" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="#"><i class="fas fa-map"></i> <span>Planos</span> <span class="fas fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Planos/registrar.planos.php">Registrar plano</a></li>
											<li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Planos/listar.planos.php">Consultar plano</a></li>
										  </ul>
										</li>
										<li id="menu-academico" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="#"><i class="fas fa-comment-dollar"></i> <span>Pagos</span> <span class="fas fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											 <li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Pagos/registrar.pagos.php">Registrar pago</a></li>
                       <li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Pagos/listar.pagos.php">Consultar pago</a></li>
										  </ul>
										</li>
										<li id="menu-academico" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="#"><i class="fas fa-comments-dollar"></i> <span>Abonos</span> <span class="fas fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											 <li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Abonos/registrar.abono.php">Registrar abono</a></li>
                       <li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Abonos/listar.abono.php">Consultar abono</a></li>
										  </ul>
										</li>
										<li id="menu-academico" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="#"><i class="fas fa-parachute-box"></i> <span>Insumos</span> <span class="fas fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Insumo/registrar.insumo.php">Registrar insumo</a></li>
											<li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Insumo/listar.insumo.php">Consultar insumo</a></li>
										  </ul>
										</li>
										<li style="background-color: #828282;" id="menu-academico" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="#"><i class="fas fa-truck-loading"></i> <span>Proveedor</span> <span class="fas fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Proveedores/registrar.proveedores.php">Registrar proveedor</a></li>
											<li id="menu-academico-avaliacoes" ><a style="background-color: #606060;  border-left: 4px solid #000000;" href="../Proveedores/listar.proveedores.php">Consultar proveedor</a></li>
										  </ul>
										</li>
										<!-- <li id="menu-academico" ><a href="#"><i class="fas fa-envelope-open-text"></i> <span>Publicación</span> <span class="fas fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="shoes.html">Registrar publicación</a></li>
											<li id="menu-academico-avaliacoes" ><a href="products.html">Consultar publicación</a></li>
										  </ul>
										</li> -->
										

							        
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix" style="background-color: #606060;"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->

	<script type="text/javascript">

	$(function() {

		// We use an inline data source in the example, usually data would
		// be fetched from a server

		var data = [],
			totalPoints = 300;

		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		// Set up the control widget

		var updateInterval = 30;
		$("#updateInterval").val(updateInterval).change(function () {
			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				if (updateInterval < 1) {
					updateInterval = 1;
				} else if (updateInterval > 2000) {
					updateInterval = 2000;
				}
				$(this).val("" + updateInterval);
			}
		});

		var plot = $.plot("#placeholder", [ getRandomData() ], {
			series: {
				shadowSize: 0	// Drawing is faster without shadows
			},
			yaxis: {
				min: 0,
				max: 100
			},
			xaxis: {
				show: false
			}
		});

		function update() {

			plot.setData([getRandomData()]);

			// Since the axes don't change, we don't need to call plot.setupGrid()

			plot.draw();
			setTimeout(update, updateInterval);
		}

		update();

		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});

	</script>
<!-- /real-time -->

    <script>

		$(function() {

			"use strict";

			$(".gantt").gantt({
				source: [{
					name: "Sprint 0",
					desc: "Analysis",
					values: [{
						from: "/Date(1320192000000)/",
						to: "/Date(1322401600000)/",
						label: "Requirement Gathering", 
						customClass: "ganttRed"
					}]
				},{
					name: " ",
					desc: "Scoping",
					values: [{
						from: "/Date(1322611200000)/",
						to: "/Date(1323302400000)/",
						label: "Scoping", 
						customClass: "ganttRed"
					}]
				},{
					name: "Sprint 1",
					desc: "Development",
					values: [{
						from: "/Date(1323802400000)/",
						to: "/Date(1325685200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1325685200000)/",
						to: "/Date(1325695200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Sprint 2",
					desc: "Development",
					values: [{
						from: "/Date(1326785200000)/",
						to: "/Date(1325785200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1328785200000)/",
						to: "/Date(1328905200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Release Stage",
					desc: "Training",
					values: [{
						from: "/Date(1330011200000)/",
						to: "/Date(1336611200000)/",
						label: "Training", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Deployment",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1338711200000)/",
						label: "Deployment", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Warranty Period",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1349711200000)/",
						label: "Warranty Period", 
						customClass: "ganttOrange"
					}]
				}],
				navigate: "scroll",
				scale: "weeks",
				maxScale: "months",
				minScale: "days",
				itemsPerPage: 10,
				onItemClick: function(data) {
					alert("Item clicked - show some details");
				},
				onAddClick: function(dt, rowId) {
					alert("Empty space clicked - add an item!");
				},
				onRender: function() {
					if (window.console && typeof console.log === "function") {
						console.log("chart rendered");
					}
				}
			});

			$(".gantt").popover({
				selector: ".bar",
				title: "I'm a popover",
				content: "And I'm the content of said popover.",
				trigger: "hover"
			});

			prettyPrint();

		});

    </script>
		   
</header>
