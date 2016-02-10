<?php 
echo "
<center><a href='?un=$u' class='aind'>Ver todos los contenidos de la unidad</a></center><br>";
?>

<center><span class='glyphicon glyphicon-list-alt'></span><a href="http://fiseaprende.com/basica/lista-algebrabasica" class="aind"> Regresar al indice</a></center><br>

<?php 
echo "
<center><a href='?un=$u&sub=true' class='aind'>Compartir un material</a></center><br>"; 
?>

<center><a href="http://fiseaprende.com/foroconstruc" class="aind">Ir al foro de la materia</a></center><br>

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
        include("../scripts/form_agregarseccion.php");
    }
?>