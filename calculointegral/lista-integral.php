<?php global $materia; $materia="Calculo integral"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista calculo integral</title>
	<meta name="viewport" content="width=device-width,  initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="Aquí encontraras una gran variedad de temas relacionados con Calculo integral, temas tales como sumas de Riemann, constante de integración, métodos de integración, integración indefinida, integración definida, calculo del área bajo la curva, calculo de volumen de sólidos de revolución, métodos numéricos de integración, longitud de curvas y mucho mas">
	<meta name="keywords" content="fiseaprede,fiseaprende.com, fise, calculo integral, matematicas bachillerato, matematicas, recomendaciones calculo integracion, ejercicios resueltos de calculo integral, ejercicios de practica de calculo integral, videos de calculo integral, videos de matematicas, contenidos educativos, formularios de calculo integral, conocimientos de calculo integral, apuntes de calculo integral, aplicaciones del calculo integral,limites, continuidad, origen de las derivadas, sumas de Riemann, constante de integracion, metodo de integracion, integracion indefinida, integracion definida, calculo del area bajo la curva, calculo de volumen de solidos de revolucion, metodos numericos de integracion, longitud de curvas"/>
	<link rel="stylesheet" href="../css/bootstrapset.css">
	<link rel="stylesheet" href="../css/list.css">
	<link rel="stylesheet" href="../js/bootstrap.js">
        <link rel="shortcut icon" href="../image/icono.jpg">
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
							<div class="col-md-1 col-md-offset-2 hidden-sm hidden-xs">
                                   <img class="img-circle" src="../image/int.jpg" alt="Generic placeholder image" width="80" height="80" border:"2px solid">
                            </div>
							<div class="col-md-5 col-sm-6"><h1>Indice de Calculo integral</h1></div>
							<div class="col-md-3 col-sm-2">
								<div class="dropdown" style="margin-top:24px;float:rigth;">
								 <button style="max-width:200px;background-color:rgba(57, 146, 131, .95);color:white;" class="btn dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Mas de la materia
								     <span class="caret"></span>
								 </button>
								 		<ul class='dropdown-menu hoverint' aria-labelledby='dropdownMenu1'>
                                                                                        <li><a href="http://fiseaprende.com/calculointegral/recoint">Recomendaciones</a></li>
								 			<li><a href="http://fiseaprende.com/calculointegral/panelint?un=Subir&sub=true">Subir contenido</a></li>
								 			<li><a href="http://fiseaprende.com/foroconstruc">Foro</a></li>
								 			
								 		</ul>
								</div>
							</div>
						</div>
						
						<hr class="hrint">
						<div class="row">
							
                                                             <?php include("../scripts/listas/principal.php"); ?>
							
							
						</div>	
                                                <hr class="hrint">
						<?php include("../scripts/recomend/recoa.php"); ?>
						<hr class="hrint">

                        <div class="row">
                          <div class='col-md-10 col-md-offset-1'>
                            <h3>Contenidos compartidos recientemente</h3>
                          </div>
                        </div>  

                        <div class="row">

                            <?php include("../scripts/recientes.php"); ?>
                            
    
                        </div>
                        <hr class="hrint">
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