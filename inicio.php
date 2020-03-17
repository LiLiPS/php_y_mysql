<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo CRUD</title>
</head>
<body>

	<?php 
	try {
		//Conexión a bd
	$usuario = 'root';
	$contraseña = '';
	$base_datos = 'ejemplo';
	$servidor = 'localhost';
	$mbd = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $contraseña);

	//Sentencia para consultar los datos de la bd
	$alumnos = $mbd->query('SELECT * from alumno')->fetchAll();

	$mbd = null;
	} catch (PDOException $e) {
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	} 
	?>

	<!--Direcciona al formulario para registrar-->
	<a href="formulario.php">Nuevo registro</a>
	<h1>Lista de alumnos</h1>
	<!--Tabla para mostrar los registros existentes-->
	<table>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Carrera</th>
			<th>Calificación</th>
			<th>Opciones</th>
		</tr>
		<!--Validar si existen registros en la bd-->
		<?php if ($alumnos) { ?> <!--Si hay, se muestran-->
			<!--Iterar el resultado de la consulta a la bd-->
			<?php foreach($alumnos as $alumno) { ?>
		        <tr>
		        	<!--Mostrar los datos de cada alumno-->
					<td><?php echo $alumno['id']; ?></td>
					<td><?php echo $alumno['nombre']; ?></td>
					<td><?php echo $alumno['carrera']; ?></td>
					<td><?php echo $alumno['calificacion']; ?></td>
					<td>
						<!--Direcciona al formulario para modificar y manda id del alumno por GET-->
						<a href="formulario_modificar.php?id=<?php echo $alumno['id']?>">Editar</a>
						<br>
						<!--Direcciona al formulario para eliminar y manda id del alumno por GET-->
						<a href="formulario_eliminar.php?id=<?php echo $alumno['id']?>">Eliminar</a>
					</td>
				</tr>
		    <?php } ?>
		<?php } else { ?><!--Si no hay alumnos registrados, se muestra mensaje-->
			<tr>
				<td colspan="5">No se encontraron registros</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>