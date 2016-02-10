<?php global $materia; $materia="Algebra basica"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista álgebra básica</title>
	<meta name="viewport" content="width=device-width,  initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="Aquí encontraras una gran variedad de temas relacionados con Algebra básica, temas tales como suma y resta algebraica, multiplicación algebraica, división algebraica, máximo común denominador, introducción a las ecuaciones, potencias algebraicas, radicales, productos notables, factorizacion y mucho mas">
	<meta name="keywords" content="fiseaprede,fiseaprende.com, fise, álgebra, álgebra básica, matemáticas bachillerato, matemáticas, recomendaciones de álgebra básica, ejercicios resueltos de álgebra básica, ejercicios de practica de álgebra básica, vídeos de álgebra básica, vídeos de matemáticas, contenidos educativos, formularios de algebra basica, conocimientos de algebra basica, apuntes de algebra basica, suma y resta algebraica, multiplicación algebraica, división algebraica, máximo común denominador, introducción a las ecuaciones, potencias algebraicas, radicales, productos notables, factorizacion y mucho mas"/>
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
	  <div class="main">	
		<div class="row">
			
			<div class="col-md-10 col-md-offset-1" >
				<div class="panel panel-default fk" style="border-radius:10px;">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-1 col-md-offset-2 hidden-sm hidden-xs mdlo">
                                   <img class="img-circle" src="../image/bas.jpg" alt="Generic placeholder image" width="80" height="80" border:"2px solid">
                            </div>
							<div class="col-md-5 col-sm-6"><h1><?php $io="�ndice de "; $yu="�lgebra b�sica"; echo utf8_encode($io); echo utf8_encode($yu); ?></h1></div>
							<div class="col-md-3 col-sm-2">
								<div class="dropdown" style="margin-top:24px;float:rigth;">
								 <button style="max-width:200px;background-color:rgba(54, 134, 164, .9);color:white;" class="btn dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Más de la materia
								     <span class="caret"></span>
								 </button>
								 		<ul class='dropdown-menu hoverbas' aria-labelledby='dropdownMenu1'>
                                                                                        <li><a href="http://fiseaprende.com/basica/recobas">Recomendaciones</a></li>   
								 			<li><a href='http://fiseaprende.com/basica/panelalgbas?un=Subir&sub=true'>Subir contenido</a></li>
								 			<li><a href="http://fiseaprende.com/foroconstruc">Foro</a></li>
								 			
								 		</ul>
								</div>
							</div>
						</div>
						
						<hr class="hrbas">
						<div class="row">
							<?php 

								include("../config.php");
                                                                include("../scripts/limpias/limpiar.php");  
								$consulta="SELECT * FROM unidades_materias WHERE materia='Algebra basica'";
								$ejecutar=$conexion->query($consulta);
								while ($imprime=mysqli_fetch_array($ejecutar)) {
									$unidad=$imprime['unidad'];
                                                                        $unidad_d=utf8_decode($imprime['unidad']);
                                                                        $unidad_l=urls_amigables($unidad_d);
									echo "

									<div class='col-md-8 col-sm-12 col-md-offset-2'>
										<a class='colq' href='http://fiseaprende.com/basica/panelalgbas?un=$unidad_l'>	
											<div class='panel panel-success borderbas'>
												<div class='temebas temesize panel-body'>
													<h4>$unidad</h4>
													
												</div>
											</div>
										</a>
									</div>";
								}

							 ?>
							 
							
						</div>	
						<hr class="hrbas">

						<?php include("../scripts/recomend/recoa.php"); ?>
                                                <hr class="hrbas">    

	                        <div class="row">
	                            <div class='col-md-10 col-md-offset-1'>
                                        <h3>Contenidos compartidos recientemente</h3>
                                    </div>
	                        </div>  

	                        <div class="row">

	                            <?php include("../scripts/recientes.php"); ?>
	                            
	    
	                        </div>
                        <hr class="hrbas">
                        <br><br>
	
					</div>
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