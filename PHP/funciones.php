<?php //Defino 
require('conexion.php');
/*$codigo = $_POST['codigo'];
*
 * 
 */
class productos
{
	//Se le debe para el codigo de barras a esta funcion
	function buscarPrecio()
	{
		$con = conexion();
		$consulta = $con->prepare("SELECT precio from productos where cod = 7792360072461");
		$consulta->execute(array());
		$resultado = $consulta->fetchAll();
		return $resultado;
	}
}
?>