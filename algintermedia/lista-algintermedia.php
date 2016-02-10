<?php global $materia; $materia="Algebra intermedia"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista álgebra intermedia</title>
	<meta name="viewport" content="width=device-width,  initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<meta name="description" content="Aquí encontraras una gran variedad de temas relacionados con Algebra intermedia, temas tales como operaciones con funciones, funciones polinomiales, funciones exponenciales y logarítmicas, sistemas de ecuaciones, álgebra lineal básica, series, permutaciones y mucho mas">
	<meta name="keywords" content="fiseaprede,fiseaprende.com, fise, algebra, algebra intermedia, matematicas bachillerato, matematicas, recomendaciones de algebra, ejercicios resueltos de algebra, ejercicios de practica de algebra, videos de algebra, videos de matematicas, contenidos educativos, formularios de algebra, conocimientos de algebra, apuntes de algebra, aplicaciones algebraicas,Funciones polinomiales, Funciones racionales,Funciones exponencial y logarítmica, Sistemas de ecuaciones y desigualdades, Sucesiones, Series y notación sumatoria, Progresiones aritméticas, permutaciones, factoriales"/>
	<link rel="stylesheet" href="../css/bootstrapset.css">
	<link rel="stylesheet" href="../css/list.css">
	<link rel="stylesheet" href="../js/bootstrap.js">
	<link rel="shortcut icon" href="../image/icono.jpg">
</head>
<body>
	<?php include_once("../analyticstracking.php") ?>
	<?php include("../header.php");?>
    <?php include("../mensajesbas.php"); ?>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-10 col-md-offset-1" >
				<div class="panel panel-default fk" style="border-radius:10px;">
					<div class="panel-body">
						<div class="row">
                            <div class="col-md-1 col-md-offset-1 hidden-sm hidden-xs mdlo">
                                   <img class="img-circle" src="../image/alg.jpg" alt="Generic placeholder image" width="80" height="80" border:"2px solid">
                            </div>
                            <div class="col-md-5 col-sm-6"><h1><?php $io="�ndice de "; $yu="�lgebra intermedia"; echo utf8_encode($io); echo utf8_encode($yu); ?></h1></div>
                            <div class="col-md-3">
                                <div class="dropdown" style="margin-top:24px;float:rigth;">
                                 <button style="max-width:200px;background-color:rgba(37, 61, 103, .97);color:white;" class="btn dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Más de la materia
                                     <span class="caret"></span>
                                 </button>
                                        <ul class='dropdown-menu hoveralg' aria-labelledby='dropdownMenu1'>
                                        	<?php $path="./"; 
                                        		echo '<li><a href="'.$path.'algintermedia/recoalg">Recomendaciones</a></li>';
                                        	?>

                                            <li><a href="/algintermedia/recoalg">Recomendaciones</a></li>
                                            <li><a href='/algintermedia/panelalg?un=Subir&sub=true'>Subir contenido</a></li>
                                            <li><a href="/foroconstruc">Foro</a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
						
						<hr class="hralgi">
						<div class="row">
					             <?php include("../scripts/listas/principal.php"); ?> 
						</div>	
                        <hr class="hralgi">
                        
                        <?php include("../scripts/recomend/recoa.php"); ?>
			
                        <hr class="hralgi">
                        
                        <div class="row">
                            <div class='col-md-10 col-md-offset-1'>
                               <h3>Contenidos compartidos recientemente</h3>
                            </div>
                        </div>  

                        <div class="row">
                                  <?php include("../scripts/recientes.php"); ?>                        
                        </div>
                        <hr class="hralgi">

                        <br><br>

					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include("../footerset.php") ?>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>	