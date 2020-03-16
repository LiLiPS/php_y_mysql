<?php
try {
	//Conexión a base de datos
	$usuario = 'root'; //Lo tiene por defecto Mysql
	$contraseña = '';
	$base_datos = 'ejemplo';
	$servidor = 'localhost';
	$mbd = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $contraseña);

    echo "Conectado exitosamente!!!!! :)"; 

    //Cerrar conexión a base de datos
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
