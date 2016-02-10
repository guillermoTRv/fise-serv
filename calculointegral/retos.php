<?php 
    # addslashes(htmlspecialchars(strip_tags(trim())))
    error_reporting(E_ALL ^ E_NOTICE);
    global $un; $un=addslashes(htmlspecialchars(strip_tags(trim($_GET['un']))));
    global $tm; $tm=addslashes(htmlspecialchars(strip_tags(trim($_GET['tm']))));
    global $by; $by=addslashes(htmlspecialchars(strip_tags(trim($_GET['by']))));
    global $cons; $cons=addslashes(htmlspecialchars(strip_tags(trim($_GET['cons']))));
    global $cont; $cont=addslashes(htmlspecialchars(strip_tags($_GET['cont'])));
    global $prf; $prf=addslashes(htmlspecialchars(strip_tags(trim($_GET['prf']))));
    global $sub; $sub=addslashes(htmlspecialchars(strip_tags(trim($_GET['sub']))));
    global $metaria; $materia="Calculo integral"; 
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Calculo diferencial</title>
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="shortcut icon" href="../image/icono.jpg">
    <link rel="stylesheet" href="../css/bootstrapset.css">
    <link rel="stylesheet" href="../css/port.css">
    <script type="text/javascript" src="../js/agregarNuevaFila.js"></script>
    <script type="text/javascript" src="../js/modificarEstiloInputFile.js"></script>
    <link rel="stylesheet" href="../js/bootstrap.js">
    <script src="http://code.jquery.com/jquery.js"></script>
</head>

<body>
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
                            <center><p class="sisbus"><strong>Progreso de la practica</strong></p></center>      
                                <center>
                                    <div>
                                        <button class="btn btn-ind" type="button">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correctos <span class="badge">4</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </button>
                                        <br><br>
                                        <button class="btn btn-ind" type="button">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Revision &nbsp;<span class="badge">4</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </button>
                                        <br>   
                                        <br>
                                        <button style="max-width:200px;background-color:rgba(57, 146, 131, .95);color:white;" class="btn btn-ind" type="button">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total &nbsp;<span class="badge">8</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </button>
                                        <br>     
                                    </div>
                                </center>
                                <br>
                                



                        </div>
                        <center><a href='?un=$un&tm=$nom_tema' class='list-group-item fenint'>Sumas de Riemann</a></center>
                        <center><a href='?un=$un&tm=$nom_tema' class='list-group-item fenint'>Integral definida</a></center>
                        <center><a href='?un=$un&tm=$nom_tema' class='list-group-item fenint'>Calculo de areas</a></center>
                        <br>
                        <center><span class='glyphicon glyphicon-list-alt'></span><a href='http://localhost/pruebas/lineal/lista-algebralineal' class='aind'> Regresar al indice de listas</a></center><br>
                        <hr>                        
                    </div>
    				

    			</div>
    		</div>

    		<div class="col-md-9 columrigth">
    			<div class="panel panel-default">
    				<div class="panel-heading">
                        <div class="row">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <img class="img-circle hidden-xs" src="../image/int.jpg" alt="Generic placeholder image" width="70" height="70" style="margin-left:15px;">
                                </div>
                                <div class="media-body">
                                    <h3>Lista de ejercicios: Calculo del area bajo la curva</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <?php 
                            if ($cont=='' && empty($sub)){
                                include("panel/datos_mat.php");
                            } 
                        ?>

                    </div>
    			    
    			    <div class="panel-body fk">

                        <div class='row'>
  
  <div class="col-md-5 col-md-offset-1">
    <img class="img-thumbnail img-responsive" src='../image/dif.jpg'  alt="Ecuacion exponencial">
  </div>
  <div class='col-md-4'>
    <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
    0%
  </div>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 2%;">
    2%
  </div>
</div>
    <form id="form_seccion" method='POST'>
      <legend>Ejercicio a desarrollar</legend>
      <div class="form-group">
        <label for="exampleInputEmail1">Que valor tiene la pendiente a</label>
        <input type="text" name='rt' class="form-control" placehoder="solo numeros">
      </div>
      <!--<div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          No se puede
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          El resultado es una constante
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          El resultado es una variable
        </label>
      </div>-->
      <button type="button" value="enviar" id="btn-enviar" class="btn btn-success btn-sm">Evaluar</button>
      <small id="m_s"></small>
      <nav>
  <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</nav>
    </form>
  </div>
</div></div>
<div class="row">
  <center>
  <div style="border-bottom:solid #f2f2f2 2px;margin-left:-50px;margin-bottom:60px;"><p></p><br></div>
  </center>


    			    </div>
    			    
    			</div>
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
    <?php include('../footerset.php'); ?>

    <script src="http://code.jquery.com/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    
</body>
</html>