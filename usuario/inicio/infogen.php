<?php 
	$myid=$_SESSION['id_usuario'];

	$b_p="SELECT id_user,point_user FROM usuariosfise WHERE id_user='$myid'";
	$e_p=$conexion->query($b_p);
	$array_p=$e_p->fetch_array();
	$puntos=$array_p[1];
	echo "
		<p class='pinf'>Cuentas con $puntos puntos</p>
	";

	$b_content="SELECT COUNT(id_user) FROM list_content_rel where id_user='$myid'"; 
	$e_content=$conexion->query($b_content);
	$array_c=$e_content->fetch_array();

	$conten=$array_c[0];

	echo "
		<p class='pinf'>$conten contenidos almacenados</p>
	";

	
 ?>
<?php 
    $contenidos="SELECT count(*) FROM ficha_contenido_materia WHERE id_user=".$_SESSION['id_usuario']."";
    $ejecutarcont=$conexion->query($contenidos);
    $num=$ejecutarcont->fetch_array();
    echo " <p class='pinf'>$num[0] contenidos compartidos</p>";	
 ?>