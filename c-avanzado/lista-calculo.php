<?php global $materia; $materia="Calculo avanzado"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista Calculo multivariable y vectorial</title>
	<meta name="viewport" content="width=device-width,  initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" href="../css/bootstrapset.css">
	<link rel="stylesheet" href="../css/list.css">
	<link rel="stylesheet" href="../js/bootstrap.js">
        <link rel="shortcut icon" href="../image/icono.jpg">
	<style type="text/css">
                a.colqa{
                        text-decoration:none;
                        color:black;
                }
		a.avn{
			text-decoration:none;
			color:black;
		}
		a.avn:hover{
			text-decoration:none;
		}
		a.fencalc:hover,
        a.fencalc:focus {
        color: white;
        text-decoration: none;
        background-color:rgba(151, 84, 45, .9);
      	}
        a.todcalc{
            text-decoration:none;
            color:rgba(151, 84, 45, 1);
            font-weight:bolder;
        }
        .hovercalc > li > a:hover,
		.hovercalc > li > a:focus {
		  color: #262626;
		  text-decoration: none;
		  background-color:rgba(151, 84, 45, .6);
		}
	</style>
</head>
<body> 
        <?php include_once("../analyticstracking.php") ?>
	<?php 
        include("../header.php");
    ?>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-10 col-md-offset-1" >
				<div class="panel panel-default fk" style="border-radius:10px;">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-1 col-md-offset-2 hidden-sm hidden-xs">
                                   <img class="img-circle" src="../image/cmv.jpg" alt="Generic placeholder image" width="80" height="80" border:"2px solid">
                            </div>
							<div class="col-md-5 col-sm-6"><h1>Indice de Calculo avanzado</h1></div>
							<div class="col-md-3 col-sm-2">
								<div class="dropdown" style="margin-top:24px;float:rigth;">
								 <button style="max-width:200px;background-color:rgba(151, 84, 45, 1);color:white;" class="btn dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Mas de la materia
								     <span class="caret"></span>
								 </button>
								 		<ul class='dropdown-menu hovercalc' aria-labelledby='dropdownMenu1'>
								 			<li><a href="http://fiseaprende.com/c-avanzado/recocalculo">Recomendaciones</a></li>
								 			<li><a href="http://fiseaprende.com/c-avanzado/panelcalculo?un=Subir&sub=true">Subir contenido</a></li>
								 			<li><a href="http://fiseaprende.com/foroconstruc">Foro</a></li>
								 		</ul>
								</div>
							</div>
						</div>
						
						<hr class="hr">
						<div class="row">
						<div class="col-md-8 col-md-offset-2 col-xs-offset-0">
							<div class="panel-group pan" id='accordion' role='tablist'> 
								
								<?php include("parciales.php"); ?>

								<?php include("integrales.php"); ?>

								<?php include("vectorial.php"); ?>


								
							</div>
						</div>

						</div>	
						<hr class="hr">
						<div class="row">
							<div class="col-md-8 col-md-offset-1">
									<?php include("../scripts/recomend/recoa.php"); ?>                                
							</div>
						</div>
						
					        	
						<hr class="hr">
                        <div class="row">
                        	<div class="col-md-8 col-md-offset-1">
	                            <h3>Recientes</h3>
                        	</div>
                        </div>  

                        <div class="row">

                            <?php include("../scripts/recientes.php"); ?>
                            
    
                        </div>
                        <hr class="hr">
                        <br><br>

				        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                             <!-- one -->
                             <ins class="adsbygoogle"
                             style="display:inline-block;width:728px;height:90px"
                             data-ad-client="ca-pub-1937738501240763"
                             data-ad-slot="5460823338"></ins>
                             <script>
                             (adsbygoogle = window.adsbygoogle || []).push({});
                             </script>
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
		