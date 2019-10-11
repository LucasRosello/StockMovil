<?php
require('conexionlocal.php');
$codigo = $_GET["id"];
$con = conexion();

$precio = 0; //creo la variable donde sera almacenado el precio

$consulta = $con->prepare("SELECT precio,nombre from productos where codigo = $codigo");
$consulta->execute(array());
$resultado = $consulta->fetchAll();
$jsonDatos["id"] = $codigo;
$jsonDatos["precio"] = $resultado[0]["precio"];
$jsonDatos["nombre"] = $resultado[0]["nombre"];
echo json_encode($jsonDatos);
?>