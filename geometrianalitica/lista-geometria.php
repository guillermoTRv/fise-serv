<?php global $materia; $materia="Geometria analitica"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista geometría analítica</title>
	<meta name="viewport" content="width=device-width,  initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="Aqui encontraras una gran variedad de temas relacionados con Geometría analítica, temas tales como ecuaciones de la recta, operaciones en la recta, lugares geométricas, ortocentro, medianas, baricentros, mediatriz, circuncentro, bisectriz, incentro, ecuaciones del circulo, lugares geométricos del circulo, ejercicios de la parábola, ejercicios de la elipse, ejercicios de la hipérbola, coordenadas polares y mucho mas">
	<meta name="keywords" content="fiseaprede,fiseaprende.com, fise, geometría analítica, matemáticas bachillerato, matematicas, recomendaciones geometría analítica, ejercicios resueltos de geometría analítica, ejercicios de practica de geometria analítica, vídeos de geometria analitica, videos de matematicas, contenidos educativos, formularios de geometria analitica, conocimientos de geometria analitica, apuntes de geometria analitica, aplicaciones de la geometria analitica,ecuaciones de la recta, operaciones en la recta, lugares geometricas, ortocentro, medianas, baricentros, mediatriz, circuncentro, bisectriz, incentro, ecuaciones del circulo, lugares geometricos del circulo, ejercicios de la parábola, ejercicios de la elipse, ejercicios de la hipérbola, coordenadas polares"/>
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
                                   <img class="img-circle" src="../image/geo.jpg" alt="Generic placeholder image" width="80" height="80" border:"2px solid">
                            </div>
                            <div class="col-md-5 col-sm-6"><h1><?php $io="�ndice de "; $yu="Geometr�a analit�ca"; echo utf8_encode($io); echo utf8_encode($yu); ?></h1></div>
                            <div class="col-md-4">
                                <div class="dropdown" style="margin-top:24px;float:rigth;">
                                 <button style="max-width:200px;background-color:rgba(192,185,0,1);color:white;" class="btn dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Más de la materia
                                     <span class="caret"></span>
                                 </button>
                                        <ul class='dropdown-menu hovergeo' aria-labelledby='dropdownMenu1'>
                                            <li><a href="http://fiseaprende.com/geometrianalitica/recogeo">Recomendaciones</a></li>
                                            <li><a href='http://fiseaprende.com/geometrianalitica/panelgeo?un=Subir&sub=true'>Subir contenido</a></li>
                                            <li><a href="http://fiseaprende.com/foroconstruc">Foro</a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
						
						<hr class="hrgeo">
						<div class="row">
							<?php include("../scripts/listas/principal.php"); ?>
						</div>	
						<hr class="hrgeo">
                        <?php include("../scripts/recomend/recoa.php"); ?>                                	
                        	
			<hr class="hrgeo">
                        <div class="row">
                            <div class='col-md-10 col-md-offset-1'>
                               <h3>Contenidos compartidos recientemente</h3>
                            </div>
                        </div>   

                        <div class="row">

                            <?php include("../scripts/recientes.php"); ?>
                            
    
                        </div>
                        <hr class="hrgeo">

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