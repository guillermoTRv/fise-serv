<?php 
	include("../../config.php");
	
	$id_comentario=addslashes(htmlspecialchars(strip_tags(trim($_POST['contenido_txt']))));
	$tipo=addslashes(htmlspecialchars(strip_tags(trim($_POST['optionsRadios']))));
	$matter=addslashes(htmlspecialchars(strip_tags(trim($_POST['rx']))));
	$estado="Ver";
	date_default_timezone_set('America/Mexico_City');
   	$fecha = date("d-m-Y H:i");
   	session_start();
	$myid = $_SESSION['id_usuario'];

	$validacion="SELECT COUNT(*) FROM reportes_comentarios WHERE id_comentario='$id_comentario' AND materia
	='$matter' AND usuario_qrporta='$myid'";
	$ejecutar_validacion=$conexion->query($validacion);
	$x=$ejecutar_validacion->fetch_array();
	$num=$x[0];

	$url=$_POST['url_txt'];
	if ($num==0) {
		$reportar="INSERT INTO reportes_comentarios(id_comentario,materia,type_report,estado,usuario_qrporta,fecha_reportecomentario) VALUES('$id_comentario','$matter','$tipo','$estado','$myid','$fecha')";
   		$ejecutar=$conexion->query($reportar) or die("otra ves escribi mal la consulta");
		header("Location:$url&r=t");
	}


    else{
		header("Location:$url&r=f");
	}

 ?>