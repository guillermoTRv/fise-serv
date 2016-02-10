<?php 
	function conectarse()
	{
		$servidor="localhost";
		$usuario="root";
		$password="";
		$bd="newmatematicasymas";

		$conectar=new mysqli($servidor, $usuario, $password, $bd);
		return $conectar;
	}	
$conexion = conectarse();
 ?>