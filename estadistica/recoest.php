<?php error_reporting(E_ALL ^ E_NOTICE); global $rec;$rec     =addslashes(htmlspecialchars(strip_tags(trim($_GET['rec'])))); ?>
<?php global $materia; $materia="Estadistica"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Recomendaciones estadística</title>
	<meta name="viewport" content="width=device-width,  initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" href="../css/bootstrapset.css">
	<link rel="stylesheet" href="../css/list.css">
	<link rel="stylesheet" href="../js/bootstrap.js">
        <link rel="shortcut icon" href="../image/icono.jpg">
	<script src="http://code.jquery.com/jquery.js"></script>
</head>
<style type="text/css">
	a.jun{
            word-wrap: break-word;
            text-decoration:none;
        }
    a.jun:hover{
            text-decoration:none;
        }
    a.lnk{
    		text-decoration:none;
    	}
    a.lnk:hover{
    		text-decoration:none;
    	}
</style>
<body>
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
                            <div class="col-md-6 col-sm-7"><h1>Recomendaciones de <?php $b='Estadística'; echo utf8_encode($b); ?></h1></div>
                            <div class="col-md-4">
                                <div class="dropdown" style="margin-top:24px;float:rigth;">
                                 <button style="max-width:200px;background-color:rgba(0, 177, 64, 1);color:white;" class="btn dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Mas de la materia
                                     <span class="caret"></span>
                                 </button>
                                        <ul class='dropdown-menu hoverest' aria-labelledby='dropdownMenu1'>
                                            <li><a href='http://fiseaprende.com/estadistica/lista-estadistica'>Lista de la materia</a></li>
                                            <li><a href='http://fiseaprende.com/estadistica/panelest?un=Subir&sub=true'>Subir contenido</a></li>
                                            <li><a href="http://fiseaprende.com/foroconstruc">Foro</a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
						
						<hr class="hrest">
                            <?php include("../dinamicas/pedir_reco.php"); ?>
			    <?php include("../config.php"); ?>
			   	<?php if ($rec=='') {
			   			include("../scripts/recomend/todosrec.php");
			   		} else{
			   			include("../scripts/recomend/vista_reco.php");
			   		}
			   	 ?>
				

                        
                        <hr class="hrest">
                        
                        <br><br>

						
					</div>
				</div>
			</div>
		</div>
	</div>
        <br><br><br><br><br><br><br>
	<?php include("../footerset.php") ?>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>