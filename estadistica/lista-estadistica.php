<?php global $materia; $materia="Estadistica"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista estadística</title>
	<meta name="viewport" content="width=device-width,  initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="Aquí encontraras una gran variedad de temas relacionados con Estadística, temas tales como gráficas, distribución de frecuencias, histogramas, medias, mediana, muestreo, probabilidad, conteo, distribución de probabilidad discreta, distribución de probabilidad normal, estadística inferencial, estimación de parámetros, pruebas de hipótesis y mucho mas">
	<meta name="keywords" content="fiseaprede,fiseaprende.com, fise, estadística, estadística descriptiva, estadística inferencial, probabilidad, matemáticas bachillerato, matemáticas, recomendaciones estadística, ejercicios resueltos de estadística, ejercicios de practica de estadisitca, videos de estadística, videos de matemáticas, contenidos educativos, formularios de estadística, conocimientos de estadística, apuntes de estadística, aplicaciones de la estadística,gráficas, distribucion de frecuencias, histogramas, medias, mediana, muestreo, probabilidad, conteo, distribucion de probabilidad discreta, distribucion de probabilidad normal, estadística inferencial, estimación de parámetros, pruebas de hipótesis"/>
	<link rel="shortcut icon" href="../image/icono.jpg">
	<link rel="stylesheet" href="../css/bootstrapset.css">
	<link rel="stylesheet" href="../css/list.css">
	<link rel="stylesheet" href="../js/bootstrap.js">
	<style type="text/css">
		.riwest{
			margin-left:30px;
			margin-right:25px; 
		}
		@media screen and (max-width:600px){
            .riwest{
                margin-left:5px;
                margin-right:5px;
            }
        }
	</style>
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
                            <div class="col-md-1 hidden-sm hidden-xs">
                                   <img class="img-circle" src="../image/est.jpg" alt="Generic placeholder image" width="80" height="80" border:"2px solid">
                            </div>
                            <div class="col-md-4 col-sm-5"><h1>Indice de Estadistica</h1></div>
                            <div class="col-md-4">
                                <div class="dropdown" style="margin-top:24px;float:rigth;">
                                 <button style="max-width:200px;background-color:rgba(0, 177, 64, 1);color:white;" class="btn dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Mas de la materia
                                     <span class="caret"></span>
                                 </button>
                                        <ul class='dropdown-menu hoverest' aria-labelledby='dropdownMenu1'>
                                            <li><a href="http://fiseaprende.com/estadistica/recoest">Recomendaciones</a></li> 
                                            <li><a href="http://fiseaprende.com/estadistica/panelest?un=Subir&sub=true">Subir contenido</a></li>
                                            <li><a href="http://fiseaprende.com/foroconstruc">Foro</a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
						
						<hr class="hrest">
						<div class="row">
							<h3 style="font-family:cursive;">&nbsp;&nbsp;<span class="glyphicon glyphicon-arrow-right"></span> Estadistica descriptiva</h3>
							<br>
							<div class="row riwest">
							<?php 

								include("../config.php");
                                                                include("../scripts/limpias/limpiar.php");
								$consulta="SELECT * FROM unidades_materias WHERE materia='Estadistica' order by id_unidades asc LIMIT 0,5";
								$ejecutar=$conexion->query($consulta);
								while ($imprime=mysqli_fetch_array($ejecutar)) {
									$unidad=$imprime['unidad'];
                                                                        $unidad_d=utf8_decode($imprime['unidad']);
                                                                        $unidad_l=urls_amigables($unidad_d);
                                    $id_unidad=$imprime['id_unidades'];
                                    echo "
									<div class='col-md-4'>
                                        <a class='colq' href='#$id_unidad' data-toggle='modal'>
                                            <div class='panel panel-success borderest'>
                                                <div class='temeest panel-body'>
                                                    <h4>$unidad</h4>
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>";
								    echo"<div style='margin-top:50px;margin-right:-17px;' class='modal fade' id='$id_unidad' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
                                    include("../scripts/modal_tema.php");

                                }
							 ?>
							 </div>
							
						</div>	
						<hr class="hrest">
						<div class="row">
							<h3 style="font-family:cursive;">&nbsp;&nbsp;<span class="glyphicon glyphicon-arrow-right"></span> Probabilidad basica</h3>
							<br>
							<div class="row riwest">
							<?php 

								$consulta="SELECT * FROM unidades_materias WHERE materia='Estadistica' order by id_unidades asc LIMIT 5,4";
								$ejecutar=$conexion->query($consulta);
								while ($imprime=mysqli_fetch_array($ejecutar)) {
									$unidad=$imprime['unidad'];
                                                                        $unidad_d=utf8_decode($imprime['unidad']);
                                                                        $unidad_l=urls_amigables($unidad_d);
                                    $id_unidad=$imprime['id_unidades'];
                                    echo "
									<div class='col-md-4'>
                                        <a class='colq' href='#$id_unidad' data-toggle='modal'>
                                            <div class='panel panel-success borderest'>
                                                <div class='temeest panel-body'>
                                                    <h4>$unidad</h4>
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>";
								    echo"<div style='margin-top:50px;margin-right:-17px;' class='modal fade' id='$id_unidad' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
                                    include("../scripts/modal_tema.php");

                                }
							 ?>
							 </div>
							
						</div>
						<hr class="hrest">
						<div class="row">
							<h3 style="font-family:cursive;">&nbsp;&nbsp;<span class="glyphicon glyphicon-arrow-right"></span> Introducción a la inferencia estadistica</h3>
							<br>
							<div class="row riwest">
							<?php 

								$consulta="SELECT * FROM unidades_materias WHERE materia='Estadistica' order by id_unidades asc LIMIT 9,7";
								$ejecutar=$conexion->query($consulta);
								while ($imprime=mysqli_fetch_array($ejecutar)) {
									$unidad=$imprime['unidad'];
                                                                        $unidad_d=utf8_decode($imprime['unidad']);
                                                                        $unidad_l=urls_amigables($unidad_d);
                                    $id_unidad=$imprime['id_unidades'];
                                    echo "
									<div class='col-md-4'>
                                        <a class='colq' href='#$id_unidad' data-toggle='modal'>
                                            <div class='panel panel-success borderest'>
                                                <div class='temeest panel-body'>
                                                    <h4>$unidad</h4>
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        
                                    </div>";
								    echo"<div style='margin-top:50px;margin-right:-17px;' class='modal fade' id='$id_unidad' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
                                    include("../scripts/modal_tema.php");

                                }
							 ?>
							 </div>
							
						</div>
		        
                        <hr class="hrest">
				<?php include("../scripts/recomend/recoa.php"); ?>
                        <hr class="hrest">
                        
                        <div class="row">
                            <h3 style="margin-left:14px;">Recientes</h3>
                        </div>  

                        <div class="row">

                            <?php include("../scripts/recientes.php"); ?>
                            
    
                        </div>
                        <hr class="hrest">

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