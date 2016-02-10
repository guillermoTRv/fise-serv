<?php 
	error_reporting(E_ALL ^ E_NOTICE);		
	$materia	    =	addslashes(htmlspecialchars(strip_tags(trim($_POST["jq"]))));
	$titulo_ficha	=	addslashes(htmlspecialchars(strip_tags(trim($_POST["titulo_txt"]))));
	$id_unidad   	=	addslashes(htmlspecialchars(strip_tags(trim($_POST["unidad_slc"]))));
	$tema_ficha		=	addslashes(htmlspecialchars(strip_tags(trim($_POST["tema_slc"]))));
	$tipo_ficha		=	addslashes(htmlspecialchars(strip_tags(trim($_POST["tipo_slc"]))));
	include("../config.php");
	
	$buscar_unidad="SELECT id_unidades,unidad FROM unidades_materias WHERE id_unidades='$id_unidad'";
	$ejecutar_unidad=$conexion->query($buscar_unidad);
	$array_unidad=$ejecutar_unidad->fetch_array();
	$unidad_ficha=$array_unidad[1];
        $xy=utf8_decode($unidad_ficha);

        include("../scripts/limpias/limpiar.php");
	$unidad_fichal=urls_amigables($xy);

	$consulta_val=
		"SELECT COUNT(titulo) 
		 FROM   ficha_contenido_materia 
		 WHERE  materia  	 = '$materia' 
		 AND    titulo   	 = '$titulo_ficha' 
		 AND    unidad   	 = '$unidad_ficha' 
		 AND    tema     	 = '$tema_ficha' 
		 AND    tipo_material= '$tipo_ficha'";
	$go_cv =    $conexion->query($consulta_val);
	$x     =    $go_cv->fetch_array();
	
	if ($x[0]==0) {
		global $unidad;
		
		$descripcion_ficha	  =	 addslashes(htmlspecialchars(strip_tags(trim($_POST["descripcion_txt"]))));
		$link_ficha			  =  addslashes(htmlspecialchars(strip_tags(trim($_POST["link_txt"]))));
		$consideracion_ficha  =  addslashes(htmlspecialchars(strip_tags(trim($_POST["consideracion_rdo"]))));
		
		date_default_timezone_set('America/Mexico_City');
    	$fecha                =  date("d-m-Y H:i");

    	session_start();
		$myid                 =  $_SESSION['id_usuario'];

		$consulta=
		"INSERT INTO ficha_contenido_materia(materia,unidad,tema,titulo,descripcion_texto,link,tipo_material,consideracion,voto,fecha_registro_fichamat,fecha_modificacion_fichamat,id_user) 
		values('$materia','$unidad_ficha','$tema_ficha','$titulo_ficha','$descripcion_ficha','$link_ficha','$tipo_ficha','$consideracion_ficha','0','$fecha','0','$myid')";
		$ejecutar_consulta=$conexion->query($consulta) or die ("text mal");


		$cambio_num=
		"UPDATE usuariosfise 
		 SET    point_user=point_user+4 
		 where  id_user='$myid'";
		$ejecutar_cambio=$conexion->query($cambio_num);


		$buscar_id_ficha=
			"SELECT id_fichamat,materia,unidad,tema,titulo,tipo_material 
			 FROM   ficha_contenido_materia 
			 WHERE  materia='$materia'
			 AND    titulo='$titulo_ficha' 
			 AND    unidad='$unidad_ficha' 
			 AND    tema='$tema_ficha'
			 AND    tipo_material='$tipo_ficha'";
		$ejecutar_consulta_idficha=$conexion->query($buscar_id_ficha) or die("que esta pasando");
		$xid=$ejecutar_consulta_idficha->fetch_array();
		global $id;
		$id=$xid[0];

		
		include("urls.php");
		$mens_not="Compartiste un contenido de ".$materia;
		$notificacion=
    		"INSERT INTO notification_users(id_user,text_notification,type_notification,ulr_notificacion,fecha_notification) 
    		 VALUES ('$myid','$mens_not','contenido','$url_notification','$fecha')";
 		$ejecutar_notificacion=$conexion->query($notificacion) or die ("ha de estar mal escrita la consulta");


	function subirImagenes($conexion){
        global $id;

		foreach ($_FILES  as $key => $value) {
        // Se comprueba si el nombre del archivo no esta vacio para subirlo
           echo $_FILES[$key]["tmp_name"];  
           if ($_FILES[$key]["error"] > 0){
				$pues="no hay imagenes ";

			} else {
	
				$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
				$limite_kb = 7000;

				if (in_array($_FILES[$key]['type'], $permitidos) && $_FILES[$key]['size'] <= $limite_kb*1024){
					global $yes;
					$yes="true";
					
					
				} else {
					global $no; $no="true";
					echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
					$corregir_ficha="DELETE FROM ficha_contenido_materia WHERE id_fichamat='$id'";
					$ejercutar_correccion_fichas=$conexion->query($corregir_ficha);

					$dame_id_otraves="SELECT id_fichamat FROM ficha_contenido_materia WHERE id_fichamat='$id'";
					$ejecutar_dame=$conexion->query($dame_id_otraves);
					$resultadof=$ejecutar_dame->num_rows();
					if ($resultadof==0) {
						$cambio_numf="UPDATE usuariosfise SET point_user=point_user-4 where id_user='$myid'";
						$ejecutar_cambiof=$conexion->query($cambio_numf);
					}

					$mensaje=1;
 					include("redi.php");
 					
				}
			}
        }

        if (empty($no) && isset($yes)) {
        	foreach ($_FILES as $key => $value) {
        		$aleatorio=rand(100,999);
        		$rutasubir="../imagenes/" . $id.$aleatorio;
                $resultado = @move_uploaded_file($_FILES[$key]["tmp_name"], $rutasubir.".jpg");
					if ($resultado){
						$nombre_imagen=$id.$aleatorio;
			
						$consulta_imagen="INSERT INTO img_materias(id_fichamat,nombre_imagen) VALUES ('$id','$nombre_imagen')";
						$ejecutar_consulta_imagen=$conexion->query($consulta_imagen);	
						echo "el archivo ha sido movido exitosamente";

					} 
					else {
						echo "ocurrio un error al mover el archivo.";
						$corregir_ficha="DELETE FROM ficha_contenido_materia WHERE id_fichamat='$id'";
						$ejercutar_correccion_fichas=$conexion->query($corregir_ficha);

						$dame_id_otraves="SELECT id_fichamat FROM ficha_contenido_materia WHERE id_fichamat='$id'";
						$ejecutar_dame=$conexion->query($dame_id_otraves);
						$resultadof=$ejecutar_dame->num_rows();
						if ($resultadof==0) {
							$cambio_numf="UPDATE usuariosfise SET point_user=point_user-4 where id_user='$myid'";
							$ejecutar_cambiof=$conexion->query($cambio_numf);
						}
						$mensaje=2;
 						include("redi.php");
					}
        	}
        }

    }

    subirImagenes($conexion);
    
 	$mensaje=3;
 	include("reditrue.php");
 	$conexion->close();
	}

	else{
		$mensaje=4;
 		include("redi.php");
	}