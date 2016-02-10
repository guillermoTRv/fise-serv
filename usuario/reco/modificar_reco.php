<?php 
	include("../../config.php");
	session_start();
	echo "<br>".$id_reco 	 	=      	   addslashes(htmlspecialchars(strip_tags(trim($_POST['e']))));
	echo $materia 	 	=      	   addslashes(htmlspecialchars(strip_tags(trim($_POST['w']))));
 	echo $texto 	 	=      	   addslashes(htmlspecialchars(strip_tags(trim($_POST['q']))));

 	date_default_timezone_set('America/Mexico_City');
    $data               =   date("Y-m-d H:i:s");
	if (isset($materia) && isset($texto)) {
	    	$update="UPDATE recomendaciones_mat SET materia='$materia',texto_reco='$texto',fecha_modificacion_reco='$data' WHERE id_reco='$id_reco'";
	    	$ejecutar=$conexion->query($update) or die("no se pudo");
	    	echo "si se pudo";
	    	header("Location:http://fiseaprende.com/usuario/users?rco=rco&lpet=lpet");

	    }  
	echo $eliminar 	 	    =      addslashes(htmlspecialchars(strip_tags(trim($_POST['eliminar_rdo']))));
 	echo $id_recoelim 	 	=      addslashes(htmlspecialchars(strip_tags(trim($_POST['nf']))));  

 	if ($eliminar!='' && $id_recoelim!='') {
 		$delete="DELETE FROM recomendaciones_mat WHERE id_reco='$id_recoelim'";
 		$eje=$conexion->query($delete);
		header("Location:http://fiseaprende.com/usuario/users?rco=rco&lpet=lpet&mens=Eliminado"); 		
	 }
 ?>