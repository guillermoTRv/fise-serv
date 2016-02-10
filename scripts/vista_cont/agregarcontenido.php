<?php 
	include("../../config.php");
	
	$list 		=		addslashes(htmlspecialchars(strip_tags(trim($_POST['select_txt']))));
	session_start();
	$blista		=
		"SELECT id_listcontent,id_user,name_listcontent 
	     FROM   list_contentarch 
		 WHERE  name_listcontent ='$list' 
		 AND    id_user='".$_SESSION['id_usuario']."'";
	$elista=$conexion->query($blista);
	$alista=$elista->fetch_array();

	$id_lista=$alista[0];

	$id_ficha  		=	addslashes(htmlspecialchars(strip_tags(trim($_POST['contenido_txt']))));
	$myid 			=   addslashes(htmlspecialchars(strip_tags(trim($_SESSION['id_usuario']))));
	$matter			=   addslashes(htmlspecialchars(strip_tags(trim($_POST['kp']))));
	$titulo         =   addslashes(htmlspecialchars(strip_tags(trim($_POST['ttl']))));
	$unred			=   addslashes(htmlspecialchars(strip_tags(trim($_POST['un_txt']))));
	$url_pot     	=	addslashes(htmlspecialchars(strip_tags(trim($_POST['url_txt']))));
	$url_contenido  =   $url_pot;
	date_default_timezone_set('America/Mexico_City');
   	$fecha 			= 	date("d-m-Y H:i");

   	
   	
	$buscar_puntos="SELECT id_user,point_user FROM usuariosfise WHERE id_user='$myid'";
	$ejecutar_buscar_puntos=$conexion->query($buscar_puntos);
	$resultado_puntos=$ejecutar_buscar_puntos->fetch_array();
	$puntos=$resultado_puntos[1];
	if ($puntos>=1) {
		$validacion="SELECT COUNT(*) FROM list_content_rel WHERE id_listcontent='$id_lista' AND id_ficha='$id_ficha' AND id_user='$myid'";
		$ejecutar_validacion=$conexion->query($validacion);
		$avalidacion=$ejecutar_validacion->fetch_array();
		$x=$avalidacion[0];
		if ($x==0) {

			$insertar="INSERT INTO list_content_rel(id_listcontent,id_ficha,id_user,matter,title,un_cont,url_content,fecha_registro_relacion) VALUES ('$id_lista','$id_ficha','$myid','$matter','$titulo','$unred','$url_contenido','$fecha')";
			$ejecutar_agregar=$conexion->query($insertar) or die("porque no s equiso ejecutrar");

			$nuevo_puntuaje=$puntos-1;
			$cambio_num="UPDATE usuariosfise SET point_user='$nuevo_puntuaje' where id_user='$myid'";
			$ejecutar_cambio=$conexion->query($cambio_num) or die("nose");

			$mensaje="<p class='curs'>El contenido se añadio correctamente</p>";
			echo $mensaje;
		}
		else{
			$mensaje="<p class='curs'>Ya se habia guardado este contenido</p>";
			echo $mensaje;
		}

	}
	else{
			$mensaje="<p class='curs'>Ya no tienes puntos suficientes, puedes subir un contenido</p>";
			echo $mensaje;
		}
 ?>