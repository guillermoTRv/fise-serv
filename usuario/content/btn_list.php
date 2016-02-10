<?php 
	$id_my=$_SESSION['id_usuario'];
	$consulta="SELECT id_listcontent,id_user,name_listcontent FROM list_contentarch WHERE id_user='$id_my' order by id_listcontent desc";
	$ejecutar=$conexion->query($consulta) or die("que carajo");


	if ($tb!='' && $fichas=='') {
			echo "<li><a href='?cs=cs&tb=tb'>Todos los contenidos</a></li>";
		while ($array=mysqli_fetch_array($ejecutar)) {
			$nombre=$array['name_listcontent'];
			echo "<li><a href='?cs=cs&tb=tb&list=$nombre'>$nombre</a></li>";
		}
		
	}
	if ($tb=='' && $fichas!='') {
			echo "<li><a href='?cs=cs&fichas=fichas'>Todos los contenidos</a></li>";
		while ($array=mysqli_fetch_array($ejecutar)) {
			$nombre=$array['name_listcontent'];
			echo "<li><a href='?cs=cs&fichas=fichas&list=$nombre'>$nombre</a></li>";
		}
	}
?>