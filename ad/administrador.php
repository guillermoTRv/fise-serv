<?php 
    session_start();
    if ($_SESSION['panal']!='memo') {
    	header('Location:http://fiseaprende.com');
    }
   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Administrador</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/cssadmi.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="js/agregarNuevaFila.js"></script>
    <script type="text/javascript" src="js/modificarEstiloInputFile.js"></script>
    <style>
      a.{text-decoration:none;}
      a:hover{text-decoration:none;}
    </style>
  </head>

  <body>
  	<?php include("headerad.php"); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a>Hola memo<span class="sr-only">(current)</span></a></li>
            <li><a href="?ty=retos">Subir reto</a></li>
            <li><a href="?ty=reco">Subir recomendaciones</a></li>
            <li><a href="?ty=rela">Relacionar contenidos</a></li>

            <br>
            <li role="presentation"><a href="http://fiseaprende.com/ad/cerrar.php">Cerrar sesion</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-md-10  col-md-offset-2 col-sm-offset-3">
        	<h2>Indicadores basicos</h2>
        	<br>
        	<?php 
          error_reporting(E_ALL ^ E_NOTICE);
          $ty      =$_GET['ty'];
          $reco_g  =$_GET['mat'];
          $mat_g   =$_GET['reco'];
          
          if ($ty=='retos') {include("v_retos.php");}
          if (empty($ty))   {include("ind_basicos.php");}
           ?>
        </div>
      </div>
    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>	