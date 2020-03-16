<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eliminar registro</title>
</head>

<?php 
	try {
		//Conexión a bd
	$usuario = 'root';
	$contraseña = '';
	$mbd = new PDO('mysql:host=localhost;dbname=ejemplo', $usuario, $contraseña);

	//Sentencia para consultar datos del alumno, buscando por el id recibido
	$sql = "SELECT * from alumno where id=".$_GET['id'];
	//Se ejecuta la sentencia. FetchAll convierte el resultado de la sentencia en un array de php
	$alumnos = $mbd->query($sql)->fetchAll();

	//Como el resultado es un array de arrays con una sola posición, se guarda como un array simple
	$alumno = $alumnos[0];

	$mbd = null;
	} catch (PDOException $e) {
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	} ?>

<body>
	<h1>Eliminar un alumno</h1>
	<!--Formulario para eliminar un alumno-->
	<form action="eliminar_registro.php" method="post">
			<label for="id">Id:</label>
			<input type="text" id="id" name="id" value="<?php echo $alumno['id']; ?>" readonly>
			<br>
			<label for="nombre">Nombre:</label>
			<input type="text" id="nombre" name="nombre" value="<?php echo $alumno['nombre']; ?>" readonly>
			<br>
			<label for="carrera">Carrera:</label>
			<input type="text" id="carrera" name="carrera" value="<?php echo $alumno['carrera']; ?>" readonly>
			<br>
			<label for="calificacion">Calificación:</label>
			<input type="text" id="calificacion" name="calificacion" value="<?php echo $alumno['calificacion']; ?>" readonly>
			<br>
			<button type="submit">Confirmar</button>
			<!--Direcciona al inicio-->
			<a href="inicio.php">Cancelar</a>
	</form>
	
</body>
</html>