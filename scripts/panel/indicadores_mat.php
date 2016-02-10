<?php 
	$busc="SELECT * FROM unidades_materias WHERE unidad='$un'";

	$e_busc=$conexion->query($busc);
	$registro=$e_busc->fetch_assoc();
	$aydi=$registro['id_unidades'];
	$tm_ind="SELECT * FROM tema_unidad_materias WHERE id_unidades='$aydi'"; 
	$etm=$conexion->query($tm_ind);
	include("../scripts/limpias/limpiar.php");
    while ($tema_ind=mysqli_fetch_array($etm)) {
        $tema_c=$tema_ind['tema'];
        $xy=utf8_decode($tema_c);
        $nom_tema=urls_amigables($xy);
		echo "<center><a href='?un=$u&tm=$nom_tema' class='list-group-item fenmat'>$tema_c</a></center>";		
	}
?>
<br>
<br>
<?php 
echo "
<center><a href='?un=$u' class='aind'>Ver todos los contenidos de la unidad</a></center><br>";
?>
<?php include("../scripts/redi_listas.php"); ?>
<?php 
echo "
<center><a href='?un=$u&sub=true' class='aind'>Compartir un material</a></center><br>"; ?>
<center><a href="http://localhost/pruebas/foroconstruc" class="aind">Ir al foro de la materia</a></center><br>

<center><span class="glyphicon glyphicon-plus"></span><a href="#ventsec" class="aind" style="text-decoration: none;" data-toggle="modal";> Agregar esta seccion a intereses</a></center>
<hr class="hrbas">

<?php 
	function seccion(){
		error_reporting(E_ALL ^ E_NOTICE);
        session_start();
        return isset($_SESSION['usuario']);
    }
    if (!seccion()) {
        include("../scripts/form_agregarseccionsin.php");
    }
    else{
    	if ($tm=='') {
    		include("../scripts/form_agregarseccion.php");
    	}
    	if ($tm!='') {
    		include("../scripts/form_agregarsecciontm.php");
    	}
        
    }
?>	