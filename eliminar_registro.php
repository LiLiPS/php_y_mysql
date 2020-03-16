<?php 
try {
	//Conexión a base de datos
	$usuario = 'root';
	$contraseña = '';
	$mbd = new PDO('mysql:host=localhost;dbname=ejemplo', $usuario, $contraseña);

	//Sentencia sql para eliminar 
	$sql = "DELETE FROM alumno WHERE id=".$_POST['id'];
    //Se ejecuta la sentencia sql
    $mbd->exec($sql);

    //Cerrar conexión a base de datos
	$mbd = null;

	//Función de php para direccionar a página inicio
	header('Location: inicio.php');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}