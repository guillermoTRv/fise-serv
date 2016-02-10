<?php 
    error_reporting(E_ALL ^ E_NOTICE);
    @include("../scripts/get.php");
    @include("../code_class.php");
    
    global $metaria; $materia="Geometria analitica"; 
    
    @include("../scripts/limpias/lclearun.php");

    if ($cont!=''){@ include('../scripts/seo/cont.php');}

	$head = new header_fise;
	$head->setPath("../");
	$head->setScript("../js/agregarNuevaFila.js");
	$head->setScript("../js/modificarEstiloInputFile.js");
	
	$head->setDescription("Somos un sitio en donde se recomiendan y se comparten contenidos tales como ejercicios resueltos, de práctica, videos, apuntes de cuadernos, aplicaciones digitales, textos en línea, formularios, presentaciones y sitios web relacionados con las matemáticas y las ciencias, poseemos un sistema de organización de la información que te permitirá encontrar algún material más sencillamente además de que los contenidos son calificados por la comunidad");
	$head->setKeywords("fiseaprede,fiseaprende.com, fise, algebra, algebra intermedia, trigonometria, estadistica descriptiva, geometria analitica, calculo, calculo integral, calculo diferencial, matematicas bachillerato, matematicas, recomendaciones matematicas, ejercicios resueltos, ejercicios de practica, videos, videos de matematicas, contenidos educativos, formularios de calculo, formularios de estadistica, integrales, diferenciales, limites, pdf matematicas, formulas, conocimiento, apuntes de matematicas, aplicaciones matematicas, aplicaciones del calculo, aplicaciones de las integrales");
	$head->showHead();
	
 ?>

	<?php include_once("../analyticstracking.php") ?>
	<?php 
        include("../header.php");
    ?>
    <?php include("../mensajesbas.php"); ?>
    <div class="container-fluid">
    	<div class="row">
    		
            <div class="col-md-3 columleft">
    			<div class="panel panel-default fk">
                    <div class="panel-body">
                        <div class="panel panel-default forde">
                            <center><p class="sisbus"><strong>Sistema de busqueda</strong></p></center>
                    
                        <?php 
                            $css_b="style='max-width:200px;background-color:rgba(192,185,0,1);color:white;'";
                            include("../scripts/panel/boton_mat.php");
                         ?>
                        </div>
                        <?php 
                            include("../scripts/panel/indicadores_mat.php")
                         ?>
                        
                    </div>
    				

    			</div>
    		</div>

    		<div class="col-md-9 columrigth">
    			<div class="panel panel-default">
    				<div class="panel-heading">
                        <div class="row">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <img class="img-circle hidden-xs" src="../image/geo.jpg" alt="Generic placeholder image" width="66" height="66" style="margin-left:15px;">
                                </div>
                                <div class="media-body">
                                    <?php include("../scripts/panel/name_pencbas.php"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <?php 
                            if ($cont=='' && empty($sub)){
                                include("../scripts/panel/datos_mat.php");
                            } 
                        ?>

                    </div>
    			    
    			    <div class="panel-body fk">

                    <?php include("../scripts/controladoresmat.php") ?>
                    
    			    </div>
    			    
    			</div>
    		</div>
    	</div>
    </div>
    <?php include('../footerset.php'); ?>
    <script src="http://code.jquery.com/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    
</body>
</html>