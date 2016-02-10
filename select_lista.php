<?php 
	session_start();
	$myid=$_SESSION['id_usuario'];

	$consulta="SELECT id_listcontent,id_user,name_listcontent FROM list_contentarch WHERE id_user='$myid'";
                                	        
    $ejecutar_consulta=$conexion->query($consulta);
    while($registro = $ejecutar_consulta->fetch_assoc())
    {
    $name_list=utf8_encode($registro["name_listcontent"]);
    echo "<option value='$name_list'>$name_list</option>";
    }   	

?>