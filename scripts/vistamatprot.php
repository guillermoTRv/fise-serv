<?php 
	$consulta_content="SELECT id_fichamat,titulo,descripcion_texto,link,tipo_material,consideracion,voto,fecha_registro_fichamat,id_user FROM ficha_contenido_materia where id_fichamat='$cont'";
	$eje_vista=$conexion->query($consulta_content);
	$ejecutar_vista=mysqli_fetch_array($eje_vista);

	global $vista_titulo;
	$vista_titulo=$ejecutar_vista['titulo'];  
	$vista_fecha=$ejecutar_vista['fecha_registro_fichamat'];
	$vista_tipo=$ejecutar_vista['tipo_material'];
	$vista_consideracion=$ejecutar_vista['consideracion'];
	$vista_texto=$ejecutar_vista['descripcion_texto'];
	$vista_link=$ejecutar_vista['link'];
	global $id_usuario;
	$id_usuario=$ejecutar_vista['id_user'];
	$vista_votos=$ejecutar_vista['voto'];

	$consulta_usuario="SELECT id_user,name_user FROM usuariosfise WHERE id_user='$id_usuario'";
	$ejecutarc=$conexion->query($consulta_usuario);
	$nm=$ejecutarc->fetch_array();
	$nombre=$nm[1];

	echo"
	<div class='fkv'>
		<h4 style='font-size:144%;margin-top:20px;'>$vista_titulo</h4> 
		
		<strong><p style='margin-bottom:15px;'><span class='glyphicon glyphicon-calendar'></span>$vista_fecha&nbsp;<span>$vista_tipo $vista_consideracion</span></p></strong>
		<p class='textoleccion'>$vista_texto</p>";
		if ($vista_link!='') {
             echo "<span class='glyphicon glyphicon-send'></span><a class='jun' target='_blank' href=$vista_link> $vista_link</a>";
         } 	
		echo "<br>
        <br>
        <p><em><strong><small>Usuario que lo compartio: $nombre&nbsp;-&nbsp; $vista_votos me gusta</small></strong></em></p>
        <br>
	
	";
	include("vista_cont/consulta_imagenes.php");
	include("vista_cont/indicadores_content.php");
	include("vista_cont/comentariosmat.php");
	include("vista_cont/opciones.php");
	
 ?>