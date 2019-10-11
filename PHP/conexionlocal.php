<?php
function conexion()
{
	try {

		$con = new PDO('mysql:host=localhost;dbname=stockmovil', 'root', '' );
		return $con;
		
	} catch (PDOException $e) {
		return $e->getMessage();
	}
}

?>