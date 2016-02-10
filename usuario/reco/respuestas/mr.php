<?php 
	include("../../../config.php");
	session_start();
	echo $id_comentreco 	 =  addslashes(htmlspecialchars(strip_tags(trim($_POST['e']))));
	echo $texto 	 	     =  addslashes(htmlspecialchars(strip_tags(trim($_POST['q']))));
 	echo $link 	 	         =  addslashes(htmlspecialchars(strip_tags(trim($_POST['w']))));

 	date_default_timezone_set('America/Mexico_City');
    $data               =   date("Y-m-d H:i:s");

    if (isset($texto) && isset($link)) {
    		$update="UPDATE coment_reco SET texto_creco='$texto',link_reco='$link',fecha_mod_creco='$data' WHERE id_comentreco='$id_comentreco'";
	    	$ejecutar=$conexion->query($update) or die("no se pudo");
	    	echo "si se pudo";
	    	header("Location: http://fiseaprende.com/usuario/users?rco=rco&rpet=rpet");
    }

    echo $eliminar 	 	=      	   addslashes(htmlspecialchars(strip_tags(trim($_POST['eliminar_rdo']))));
 	echo $id_recoelim 	 	=      	   addslashes(htmlspecialchars(strip_tags(trim($_POST['nf']))));  

 	if ($eliminar!='' && $id_recoelim!='') {
 		$delete="DELETE FROM coment_reco WHERE id_comentreco='$id_recoelim'";
 		$eje=$conexion->query($delete);
		header("Location: http://fiseaprende.com/usuario/users?rco=rco&rpet=rpet&mens=Eliminado"); 		
	 }

 ?>