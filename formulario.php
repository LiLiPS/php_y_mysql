<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo CRUD - Registrar</title>
</head>
<body>
	<!--Formulario para registrar un alumno-->
	<h1>Registrar un alumno</h1>
	<form action="guardar_registro.php" method="post">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required>
		<br>
		<label for="carrera">Carrera:</label>
		<input type="text" id="carrera" name="carrera" required>
		<br>
		<label for="calificacion">Calificación:</label>
		<input type="text" id="calificacion" name="calificacion" required>
		<br>
		<button type="submit">Guardar</button>
		<!--Direcciona al inicio-->
		<a href="inicio.php">Cancelar</a>
	</form>
</body>
</html>