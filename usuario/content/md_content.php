<?php
	include("../../config.php");
	
	session_start();
	echo $myid    		=          $_SESSION['id_usuario'];
	echo $id_relacion 	=      	   addslashes(htmlspecialchars(strip_tags(trim($_POST['nf']))));
	
	
	if (isset($_POST['list_slc'])) {
		echo $lista         =          addslashes(htmlspecialchars(strip_tags(trim($_POST['list_slc']))));
		echo $f             =          addslashes(htmlspecialchars(strip_tags(trim($_POST['fifa']))));      

		$busqueda=
		"SELECT id_listcontent,id_user,name_listcontent 
		 FROM   list_contentarch 
		 WHERE  id_user='$myid' 
		 and    name_listcontent='$lista'";
		$e_busqueda=$conexion->query($busqueda);
		$a_busqueda=$e_busqueda->fetch_array();
		echo $nueva_id=$a_busqueda[0];

		$validacion=
		"SELECT COUNT(id_listcontent) 
		 FROM   list_content_rel  
		 WHERE  id_listcontent='$nueva_id' 
		 and    id_ficha='$f' 
		 and    id_user='$myid'";
		$e_vali=$conexion->query($validacion) or die("algo anda mal");
		$a_vali=$e_vali->fetch_array();
		echo $x=$a_vali[0];
		
		if ($x==0) {
			$update=
			"UPDATE list_content_rel 
			 SET    id_listcontent='$nueva_id' 
			 WHERE  id_rel='$id_relacion'";
			 $e_update=$conexion->query($update) or die("que pex");
			 header("Location:http://fiseaprende.com/usuario/users?cs=cs&tb=tb&list=$lista");
		}
		else{
			header("Location:http://fiseaprende.com/usuario/users?cs=cs&tb=tb&list=$lista");
		}
	}
	if (isset($_POST['eliminar_rdo'])) {
		echo "eliminar";
		$delete=
		"DELETE FROM list_content_rel 
		 WHERE       id_rel='$id_relacion'";
		$e_delete=$conexion->query($delete) or die("no");
		header("Location:http://fiseaprende.com/usuario/users?cs=cs&tb=tb&list=$lista");
		echo "se pudo";
	}
 ?>