<?php 
	//incluir encabezado html
 require_once('layout/header.php');
 
	if (isset($_POST['nombre']) 
		&& isset($_POST['referencia']) 
		&& isset($_POST['valor']) 
		&& isset($_FILES['adjunto_producto']) 
		&& isset($_POST['usuario_id'])
		&& isset($_POST['fecha_creacion'])
		) 
	{
		// vaidar las variabls si estan inicializadas
		$nombre= $_POST['nombre'];
		$referencia= $_POST['referencia'];
		$valor= $_POST['valor'];
		$adjunto_producto= $_FILES['adjunto_producto']['name'];
		$usuario_id= $_POST['usuario_id'];
		$fecha_creacion= $_POST['fecha_creacion'];
		$carpeta= "adjunto_productos/";
		$direccion= $carpeta.basename($adjunto_producto);


		if (move_uploaded_file($_FILES['adjunto_producto']['tmp_name'], $direccion))
		{
			require_once('conexion.php');

			$insertar=mysqli_query($conexion, " INSERT INTO productos( nombre, referencia, valor, adjunto_producto ,usuario_id, fecha_creacion) values('$nombre','$referencia', '$valor','$adjunto_producto','$usuario_id', '$fecha_creacion')");

				$consulta = mysqli_affected_rows($conexion);

				if($consulta == 1)
				{
					?>
					<div class="alert alert-success">
						<button type ="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Alerta!</strong> El Producto fue registrado con exito.
					</div>

					<?php 
				}
				else
				{
					?>
					<div class="alert alert-danger">
						<button type ="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Alerta!</strong> El Producto no pudo ser registrado, intentelo de nuevo.
					</div>
					<?php  
				}
		   }
		   else
		   {

		   		?>
				<div class="alert alert-danger">
					<button type ="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Alerta!</strong> El Adjunto del producto no pudo ser procesado, intentelo de nuevo.
				</div>
				<?php  
		   }

	}
	
?>

<div class="container">
	<h2 class="text-center">CREAR NUEVO PRODUCTO </h2>
	<div class="row">
	<div class="col-md-2"></div>
		<form action="crear_producto.php" class="col-md-8" method="POST" enctype="multipart/form-data">
				<div class="form- group ">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" required="">
				</div>
				<div class="form- group ">
					<label for="nombre">Referencia</label>
					<input type="text" name="referencia" class="form-control"  placeholder="Ingrese Referencia" required="">
				</div>
				<div class="form- group ">
					<label for="nombre">Valor</label>
					<input type="number" name="valor" class="form-control" placeholder="Ingrese Valor" required="">
				</div>
				<div class="form- group ">
					<label for="nombre">Fecha de creacion</label>
					<input type="date" name="fecha_creacion" class="form-control" required="">
				</div>
				<input type="hidden" name="usuario_id" value="<?php  echo $_SESSION['id']; ?>">
				<div class="form- group ">
					<label for="nombre">Adjunto Producto</label>
					<input type="file" name="adjunto_producto" class="form-control" required="">
				</div>
				<dir class="text-center">
					<button type="submit" class="btn btn-primary">Crear Producto </button>
					<a href="listar_productos.php" type="submit" class="btn btn-success">Volver Atras</a>
				</dir>
		</form>

	</div>
 </div>



<?php 
	//incluir pie de pagina html
require_once('layout/footer.php');

?>