<?php
//Conexión con PDO

function conecta(){

	try{

		$cadena = 'mysql:host=localhost;dbname="nombre_bd"';
		$conexion = new PDO ($cadena, 'usuario', 'contraseña');

		return true;

	}catch (PDOException $e){
		erro "ERROR:" . $e->getMessage();
	}

}


// Llamar a la funcion para conectar

$conecta = conecta();

if ($conecta==true) {
	# code...
} else{
	
}


?>