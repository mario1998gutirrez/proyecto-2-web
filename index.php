<?php
	//Incluir Encabezado 
	require_once('layout/header.php');
?>
<!-- Slider de ImÃ¡genes -->
<div class="row">
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class=""></li>
			<li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
				<img src="imagenes/mario.jpg">
				<div class="container">
					<div class="carousel-caption">
						<h1>CELULARES</h1>
						<p>
						   " Aprovecha el gran Descuento Directo Aplica solo por internet y ventas por telefono, consulta tarjetas participantes"<br>
						   vigente del 1 al 31 de octubre
						</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">visitar</a></p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="imagenes/andres.png">
				<div class="container">
					<div class="carousel-caption">
						<h1>TABLET</h1>
						<p>Disfruta de la comodidad de una tablet con las prestaciones de un PC</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">visitar</a></p>
					</div>
				</div>
			</div>
			<div class="item active">
				<img src="imagenes/captura.png">
				<div class="container">
					<div class="carousel-caption">
						<h1>ACCESORIOS</h1>
						<p>Que esperas tu espectacular telefono nuevo merece accesorios fabulosos visita la tienda ya que tenemos los mejores productos y al mejor precio</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">visitar</a></p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
</div>

<!-- fin slider de ImÃ¡genes -->
<h2 class="text-center">Listado de Productos relacionados con celulares, tablets y sus accesorios</h2>
<!-- Listado de productos -->
<div class="row">
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<div class="thumbnail">
			<img src="imagenes/celu.png">
			<div class="caption text-center">
				<h3>Celulares</h3>
				<p>
					...
				</p>
				<p>
					<a href="listar_productos.php" class="btn btn-default">IR</a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<div class="thumbnail">
			<img src="imagenes/tab.jpg">
			<div class="caption text-center">
				<h3>tablets</h3>
				<p>
					...
				</p>
				<p>
					<a href="listar_productos.php" class="btn btn-default">IR</a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<div class="thumbnail">
			<img src="imagenes/accesorios.jpg">
			<div class="caption text-center">
				<h3>accesorios</h3>
				<p>
					...
				</p>
				<p>
					<a href="listar_productos.php" class="btn btn-default">IR</a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<div class="thumbnail">
			<img src="imagenes/sss.jpg">
			<div class="caption text-center">
				<h3>Servicio Tecnico</h3>
				<p>
					...
				</p>
				<p>
					<a href="listar_productos.php" class="btn btn-default">IR</a>
				</p>
			</div>
		</div>
	</div>
</div>

<!-- fin listado de productos -->
<?php
	//Incluir Pie de Pagina
	require_once('layout/footer.php');
?>