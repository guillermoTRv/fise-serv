<?php 
	include("../../config.php");
	echo "<br>".$unidadd  =addslashes(htmlspecialchars(strip_tags(trim($_POST['ip']))));
	echo "<br>".$temad    =addslashes(htmlspecialchars(strip_tags(trim($_POST['px']))));
	echo "<br>".$linkd    =addslashes(htmlspecialchars(strip_tags(trim($_POST['uy']))));
	echo "<br><br>";
	echo "<br>".$titulo   =addslashes(htmlspecialchars(strip_tags(trim($_POST['cn_txt']))));
	echo "<br>".$text     =addslashes(htmlspecialchars(strip_tags(trim($_POST['ds_txt']))));
	echo "<br>".$unidad   =addslashes(htmlspecialchars(strip_tags(trim($_POST['unidad_slc']))));
	echo "<br>".$tema     =addslashes(htmlspecialchars(strip_tags(trim($_POST['tema_slc']))));
	echo "<br>".$tipo     =addslashes(htmlspecialchars(strip_tags(trim($_POST['tipo_slc']))));
	echo "<br>".$link     =addslashes(htmlspecialchars(strip_tags(trim($_POST['link']))));
	echo "<br>".$cns      =addslashes(htmlspecialchars(strip_tags(trim($_POST['cons_rdo']))));

	echo "<br>".$id_ficha =addslashes(htmlspecialchars(strip_tags(trim($_POST['hs']))));

	if ($unidad=='') 
		{echo "men"; global $unidad_ficha; $unidad_ficha=$unidadd;}
	if ($unidad!=''){
		echo "perros";
		$buscar_unidad="SELECT id_unidades,unidad FROM unidades_materias WHERE id_unidades='$unidad'";
		$ejecutar_unidad=$conexion->query($buscar_unidad);
		$array_unidad=$ejecutar_unidad->fetch_array();
		global $unidad_ficha;
		echo $unidad_ficha=$array_unidad[1];
	}
	
	if ($tema=='' || empty($tema)) 
	    {global $tm_sub; $tm_sub=$temad;}
	else{global $tm_sub; $tm_sub=$tema;}

	if ($link=='') 
	    {global $link_sub;$link_sub=$linkd;}
	else{global $link_sub;$link_sub=$link;}

	if ($cns=='' || empty($cns)) 
	    {global $cns_sub;echo $cns_sub='';}
	else{global $cns_sub;echo $cns_sub='Ejercicio-Problema';}

	echo "<br><h3>Lo que se subira</h3>";
	echo "<br>".$titulo;
	echo "<br>".$text;
	echo "<br>".$un_sub;
	echo "<br>".$tm_sub;
	echo "<br>".$tipo;
	echo "<br>".$link_sub;
	echo "<br>".$cns_sub;


	date_default_timezone_set('America/Mexico_City');
    $fecha                =  date("d-m-Y H:i");
	

	$cambiar="UPDATE ficha_contenido_materia SET unidad='$unidad_ficha',tema='$tm_sub',titulo='$titulo',descripcion_texto='$text',link='$link_sub',tipo_material='$tipo',consideracion='$cns_sub',fecha_modificacion_fichamat='$fecha' WHERE id_fichamat='$id_ficha'";
	$e_cambiar=$conexion->query($cambiar) or die("algo esta mal en cambio, porfavor regresa a la pagina anterior");
	$mens="Los cambios se realizaron correctamente";
	header("location:http://fiseaprende.com/usuario/users?aport=aport&mens=$mens");


 ?>