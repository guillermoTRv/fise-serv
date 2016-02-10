<?php 
    error_reporting(E_ALL ^ E_NOTICE);
    @include("../scripts/get.php");
    
    global $metaria; $materia="Calculo avanzado"; 
    
    @include("../scripts/limpias/lclearun.php");

    if ($cont!=''){@ include('../scripts/seo/cont.php');}
   
 ?>


<!DOCTYPE html>
<html>
<head>
	<title><?php @ include("../scripts/seo/title.php"); ?></title>
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
           <?php @ include("../scripts/seo/metades.php"); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="shortcut icon" href="../image/icono.jpg">
    <link rel="stylesheet" href="../css/bootstrapset.css">
    <link rel="stylesheet" href="../css/port.css">
           <?php @ include("../scripts/seo/js_image.php"); ?>
    <link rel="stylesheet" href="../js/bootstrap.js">
    <script src="http://code.jquery.com/jquery.js"></script>
    <style type="text/css">
         	.hovermat > li > a:hover,
    .hovermat > li > a:focus {
      color: #262626;
      text-decoration: none;
      background-color:rgba(151, 84, 45, .6);
    }
    a.fenmat:hover,
    a.fenmat:focus {
        color: white;
        text-decoration: none;
        background-color:rgba(151, 84, 45, .9);
    }
    .fenmat{
        font-family:cursive;
        margin-bottom:120px;
    }
    .amounmat{
            color:rgba(151, 84, 45, .95);
    }
    a.amounmat:hover{
            color:rgba(151, 84, 45, .95);
            text-decoration: none;   
    }
    .infomat{
            color:rgba(151, 84, 45, 1);font-size:90%;font-weight:bolder;
    }
    a.infomat:hover{
            color:rgba(151, 84, 45, 1);
            text-decoration: none;
    }
    </style>
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
                            <center><p class="sisbus"><strong>Sistema de busqueda</strong></p></center>
                    
                        <?php 
                            $css_b="style='max-width:200px;background-color:rgba(151, 84, 45, 1);color:white;'";
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
                                    <img class="img-circle hidden-xs" src="../image/cmv.jpg" alt="Generic placeholder image" width="66" height="66" style="margin-left:15px;">
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
