<?php 
$consulta="SELECT * FROM unidades_materias WHERE materia='$materia'";
$ejecutar_consulta=$conexion->query($consulta);
while($registro = $ejecutar_consulta->fetch_assoc())
{
	$name_unidad=$registro["unidad"];
	$id_unidad=$registro['id_unidades'];
	echo "<option id='unselect'value='$id_unidad'>$name_unidad</option>";
}	
?>