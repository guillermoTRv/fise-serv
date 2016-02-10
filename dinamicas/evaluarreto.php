<?php
	$reto=addslashes(htmlspecialchars(strip_tags(trim($_POST["rt"]))));
	if ($reto!='') {
		include("../config.php");

		$s="SELECT * FROM retos_pack order by id_retos desc limit 1";
		$es=$conexion->query($s);
		$as=$es->fetch_array();
		
        $respuesta=$as[2];
		$mens=$as[4];

		date_default_timezone_set('America/Mexico_City');
    	        $fecha                =  date("Y-m-d H:i:s");
		
                $insertar="INSERT INTO retos(fecha) values('$fecha')";
		$ejecutar=$conexion->query($insertar);

		if ($reto==$respuesta) {
		echo "&nbsp;$mens";
		}
		else{
		echo "&nbsp;No, ese no es el resultado :/";
		}	
	}
	
?>