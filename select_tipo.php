<?php 
$consulta="SELECT * FROM tipos_mat";
$ejecutar_consulta=$conexion->query($consulta);
while($registro = $ejecutar_consulta->fetch_assoc())
{
	$tipo=$registro["name_tipo"];
	echo "<option value='$tipo' class='curse'>$tipo</option>";
}	
?>