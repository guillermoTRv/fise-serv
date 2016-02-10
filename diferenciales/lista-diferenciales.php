<?php global $materia; $materia="Ecuaciones diferenciales"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista ecuaciones diferenciales</title>
	<meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <meta name="description" content="Aquí encontraras una gran variedad de materiales para estudiar ecuaciones diferenciales, son mas de 120 temas en los que tu podrás buscar vídeos, ejercicios, formularios, apuntes de otros usuarios y mucho mas.">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" href="../css/bootstrapset.css">
	<link rel="stylesheet" href="../css/list.css">
	<link rel="stylesheet" href="../js/bootstrap.js">
	<link rel="shortcut icon" href="../image/icono.jpg">
    <style type="text/css">
        a.avn{
	   text-decoration:none;
	   color:black;
	}
	a.avn:hover{
	   text-decoration:none;
	}
        .hred{
            border-color:rgba(0, 84, 0, .55);
        }
        .hovered > li > a:hover,
        .hovered > li > a:focus {
          color: #262626;
          text-decoration: none;
          background-color:rgba(0, 84, 0, .6);
        }
        a.colqa{
            text-decoration:none;
            color:black;
        }
        a.toded{
            text-decoration:none;
            color:rgba(0, 84, 0, 1);
            font-weight:bolder;
        }
        a.fened:hover,
        a.fened:focus {
          color: white;
          text-decoration: none;
          background-color:rgba(0, 84, 0, .81);
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
                            <div class="col-md-1 col-sm-2 col-md-offset-2 hidden-sm hidden-xs">
                                   <img class="img-circle" src="../image/ecudif.jpg" alt="Generic placeholder image" width="80" height="80" border:"2px solid">
                            </div>
                            <div class="col-md-4 col-sm-6"><h1>Indice de Ecuaciones diferenciales</h1></div>
                            <div class="col-md-4 col-sm-offset-1">
                                <div class="dropdown" style="margin-top:24px;float:rigth;">
                                 <button style="max-width:200px;background-color:rgba(0, 84, 0, .97);color:white;" class="btn dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Mas de la materia
                                     <span class="caret"></span>
                                 </button>
                                        <ul class='dropdown-menu hovered' aria-labelledby='dropdownMenu1'>
                                            <li><a href="http://www.fiseaprende.com/diferenciales/recodiferenciales">Recomendaciones</a></li>
                                            <li><a href='http://www.fiseaprende.com/diferenciales/ecuaciones-diferenciales?un=Subir&sub=true'>Subir contenido</a></li>
                                            <li><a href="http://localhost/pruebas/foroconstruc">Foro</a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
						
			<hr class="hred">
			    <div class="row">
                                 <div class="col-md-8 col-md-offset-2 col-xs-offset-0">
				      <div class="panel-group pan" id='accordion' role='tablist'> 
					<?php 
                                             include("../config.php");
                                             include("../scripts/limpias/limpiar.php");
                                             include("apartados/intro.php");
                                             include("apartados/eduno.php");
                                             include("apartados/eddos.php");
                                             include("apartados/edseries.php");
                                             include("apartados/edu.php");
                                       
								
			                 ?>			
				      </div>
				</div>
			    </div>
	
                        <hr class="hred">
                        
                        <?php include("../scripts/recomend/recoa.php"); ?>
			
                        <hr class="hred">
                        
                        <div class="row">
                            <h3 style="margin-left:14px;">Recientes</h3>
                        </div>  

                        <div class="row">

                            <?php include("../scripts/recientes.php"); ?>
                            
    
                        </div>
                        <hr class="hred">

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