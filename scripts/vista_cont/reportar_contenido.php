<?php 
	include("../../config.php");
	$id_ficha=addslashes(htmlspecialchars(strip_tags(trim($_POST['contenido_txt']))));
	$tipo=addslashes(htmlspecialchars(strip_tags(trim($_POST['optionsRadios']))));
	$matter=addslashes(htmlspecialchars(strip_tags(trim($_POST['py']))));
	$estado="Ver";
	date_default_timezone_set('America/Mexico_City');
   	$fecha = date("d-m-Y H:i");
   	session_start();
	$myid = $_SESSION['id_usuario'];

	$validacion="SELECT COUNT(*) FROM reportes_fichas WHERE id_ficha='$id_ficha' AND materia
	='$matter' AND usuario_qrporta='$myid'";
	$ejecutar_validacion=$conexion->query($validacion);
	$x=$ejecutar_validacion->fetch_array();
	$num=$x[0];


	if ($num==0) {
		$reportar="INSERT INTO reportes_fichas(id_ficha,materia,type_report,estado,usuario_qrporta,fecha_reporteficha) VALUES('$id_ficha','$matter','$tipo','$estado','$myid','$fecha')";
   		$ejecutar=$conexion->query($reportar) or die("otra ves escribi mal la consulta");
		$mensaje="<p class='curs'>El reporte se registro exitosamente, gracias</p>";
		echo $mensaje;
	}


    else{
		echo "<p class='curs'>Ya haz reportado este contenido</p>";
	}

 ?>