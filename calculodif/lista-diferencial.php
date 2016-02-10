<?php global $materia; $materia="Calculo diferencial"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista calculo diferencial</title>
	<meta name="viewport" content="width=device-width,  initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="Aquí encontraras una gran variedad de temas relacionados con Calculo diferencial, temas tales como limites, continuidad, origen de las derivadas, demostración de reglas de derivación, derivación implicita, aplicaciones de la derivada y mucho mas">
	<meta name="keywords" content="fiseaprede,fiseaprende.com, fise, calculo diferencial, matemáticas bachillerato, matematicas, recomendaciones calculo diferencial, ejercicios resueltos de calculo diferencial, ejercicios de practica de calculo diferencial, videos de calculo diferencial, videos de matematicas, contenidos educativos, formularios de calculo diferencial, conocimientos de calculo diferencial, apuntes de calculo diferencial, aplicaciones del calculo diferencial,limites, continuidad, origen de las derivadas, demostracion de reglas de derivacion, derivacion implicita, aplicaciones de la derivada, pendiente de la recta tangente, método de los 4 pasos, razón de cambio, concavidad, puntos de inflexion, maximo y minimos, regla de lhopital"/>
        <link rel="shortcut icon" href="../image/icono.jpg">
	<link rel="stylesheet" href="../css/bootstrapset.css">
	<link rel="stylesheet" href="../css/list.css">
	<link rel="stylesheet" href="../js/bootstrap.js">
</head>
<body>
	<?php include_once("../analyticstracking.php") ?>
	<?php 
        include("../header.php");
    ?>
	<?php include("../mensajesbas.php"); ?>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-10 col-md-offset-1" >
				<div class="panel panel-default fk" style="border-radius:10px;">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-1 col-md-offset-1 hidden-sm hidden-xs mdlo">
                                   <img class="img-circle" src="../image/dif.jpg" alt="Generic placeholder image" width="80" height="80" border:"2px solid">
                            </div>
							<div class="col-md-5 col-sm-6"><h1>Indice de Calculo diferencial</h1></div>
							<div class="col-md-3 col-sm-2">
								<div class="dropdown" style="margin-top:24px;float:rigth;">
								 <button style="max-width:200px;background-color:rgba(143, 122, 165, 1);color:white;" class="btn dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Mas de la materia
								     <span class="caret"></span>
								 </button>
								 		<ul class='dropdown-menu hoverdif' aria-labelledby='dropdownMenu1'>
                                                                                        <li><a href="http://fiseaprende.com/calculodif/recodif">Recomendaciones</a></li>
								 			<li><a href="http://fiseaprende.com/calculodif/paneldif?un=Subir&sub=true">Subir contenido</a></li>
								 			<li><a href="http://fiseaprende.com/foroconstruc">Foro</a></li>
								 		</ul>
								</div>
							</div>
						</div>
						
						<hr class="hrdif">
						<div class="row">
							<?php include("../scripts/listas/principal.php"); ?>
							 
							
						</div>	
                                                <hr class="hrdif">
						<?php include("../scripts/recomend/recoa.php"); ?> 
						<hr class="hrdif">

                        <div class="row">
                          <div class='col-md-10 col-md-offset-1'>
                            <h3>Contenidos compartidos recientemente</h3>
                          </div>
                        </div>  

                        <div class="row">

                            <?php include("../scripts/recientes.php"); ?>
                            
    
                        </div>
                        <hr class="hrdif">
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