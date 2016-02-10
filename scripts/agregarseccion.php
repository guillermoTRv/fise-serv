<?php
	include("../config.php"); 
	global $seccion;
	$matter 		=addslashes(htmlspecialchars(strip_tags(trim($_POST['mt']))));
	$seccion 		=addslashes(htmlspecialchars(strip_tags(trim($_POST['seccion_txt']))));
	$seccion_val 	=addslashes(htmlspecialchars(strip_tags(trim($_POST['seccion_val']))));
	$url_seccion 	=addslashes(htmlspecialchars(strip_tags(trim($_POST['url_txt']))));
	if (isset($_POST['tema_txt'])) {
		$unid=addslashes(htmlspecialchars(strip_tags(trim($_POST['unidad_txt']))));
		global $url_completa;
		$url_completa=$url_seccion."?un=".$unid."&tm=".$seccion;
		global $type;
		$type="tema";
	}
	else{
		global $url_completa;
		$url_completa=$url_seccion."?un=".$seccion;	
		global $type;
		$type="unidad";
	}
	
	session_start();
	$myid = $_SESSION['id_usuario'];


	$buscar_puntos="SELECT id_user,point_user FROM usuariosfise WHERE id_user='$myid'";
	$ejecutar_buscar_puntos=$conexion->query($buscar_puntos);
	$resultado_puntos=$ejecutar_buscar_puntos->fetch_array();
	$puntos=$resultado_puntos[1];
	

	if ($puntos>=2) {
		$validacion="SELECT COUNT(id_user) FROM preferent_user WHERE seccion='$seccion_val' AND id_user='$myid' AND matter='$matter'";
		$ejecutar_validacion=$conexion->query($validacion);
		$y=$ejecutar_validacion->fetch_array();
	
		if ($y[0]==0) {
			date_default_timezone_set('America/Mexico_City');
    		$fecha = date("d-m-Y H:i");
			$insertar="INSERT INTO preferent_user(seccion,id_user,tipo_preferent,matter,url_preferent,fecha_registro_preferent) VALUES ('$seccion_val','$myid','$type','$matter','$url_completa','$fecha')";
			$ejecutar_registro=$conexion->query($insertar);

		
			$nuevo_puntuaje=$puntos-2;
			$cambio_num="UPDATE usuariosfise SET point_user='$nuevo_puntuaje' where id_user='$myid'";
			$ejecutar_cambio=$conexion->query($cambio_num);

			$m="La seccion se añadio correctamente a tus preferencias";
			$mensaje=utf8_encode($m);
			echo "<p class='curs'>$mensaje</p>";
		

		
		
	}
	else{
		$m="Esta seccion ya esta añadida a tus preferencias";
		$mensaje=utf8_encode($m);
		echo "<p class='curs'>$mensaje</p>";
	}	
	}
	else{
		$mensaje="<p class='curs'>Ya no tienes puntos suficientes, puedes subir un contenido</p>";
		echo $mensaje;
	}

	