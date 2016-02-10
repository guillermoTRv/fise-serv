<?php global $materia; $materia="Trigonometria"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista trigonometria</title>
	<meta name="viewport" content="width=device-width,  initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="Aquí encontraras una gran variedad de temas relacionados con Trigonometría, temas tales como razones de los triángulos rectángulos, funciones trigonométricas, gráficas de las funciones trigonométricas, funciones trigonométricas inversas, ecuaciones trigonométricas, leyes de los ángulos, ecuaciones polares y mucho mas">
	<meta name="keywords" content="fiseaprede,fiseaprende.com, fise, trigonometria, matemáticas bachillerato, matematicas, recomendaciones trigonometria, ejercicios resueltos de trigonometria, ejercicios de practica de trigonometria, videos de trigonometria, videos de matematicas, contenidos educativos, formularios de trigonometria, conocimientos de trigonometria, apuntes de trigonometria, aplicaciones de la trigonometria,razones de los triangulos rectangulos, funciones trigonometricas, gracias de las funciones trigonometricas, funciones trigonometricas inversas, ecuaciones trigonometricas, leyes de los angulos, ecuaciones polares"/>
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
			
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default fk" style="border-radius:10px;">
					<div class="panel-body">
						<div class="row">
                            <div class="col-md-1 col-md-offset-2 hidden-sm hidden-xs mdlo">
                                   <img class="img-circle" src="../image/trig.jpg" alt="Generic placeholder image" width="80" height="80" border:"2px solid">
                            </div>
                            <div class="col-md-4 col-sm-5"><h1><?php $io="�ndice de "; $yu="Trigonometr�a"; echo utf8_encode($io); echo utf8_encode($yu); ?></h1></div>
                            <div class="col-md-4">
                                <div class="dropdown" style="margin-top:24px;float:rigth;">
                                 <button style="max-width:200px;background-color:rgba(170, 57, 57, .83);color:white;" class="btn dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Más de la materia
                                     <span class="caret"></span>
                                 </button>
                                        <ul class='dropdown-menu hovertrig' aria-labelledby='dropdownMenu1'>
                                            <li><a href="http://fiseaprende.com/trigonometria/recotrig">Recomendaciones</a></li>
                                            <li><a href='http://fiseaprende.com/trigonometria/paneltrig?un=Subir&sub=true'>Subir contenido</a></li>
                                            <li><a href="http://fiseaprende.com/foroconstruc">Foro</a></li>
                                            
                                        </ul>
                                </div>
                            </div>
                        </div>
						
						<hr class="hrtrig">
						<div class="row">
						    <?php include("../scripts/listas/principal.php"); ?>
						</div>	
						<hr class="hrtrig">
                        <?php include("../scripts/recomend/recoa.php"); ?>                                	
                        
                        <hr class="hrtrig">
                        <div class="row">
                            <div class='col-md-10 col-md-offset-1'> 
                                <h3>Contenidos compartidos recientemente</h3>
                            </div>
                        </div>  

                        <div class="row">

                            <?php include("../scripts/recientes.php"); ?>
                            
    
                        </div>
                        <hr class="hrtrig">

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