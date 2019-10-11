<?php
function conexion()
{
	$usuario ="u780069822_user";
	$pass = "123456";
	try {

		$con = new PDO('mysql:host=localhost;dbname=u780069822_stock', $usuario, $pass );
		return $con;
		
	} catch (PDOException $e) {
		return $e->getMessage();
	}
}

?>