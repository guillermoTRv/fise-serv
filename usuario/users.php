<?php 
    function IS(){
        session_start();
        return isset($_SESSION['usuario']);
    }
    if (!IS()) {
        header('Location:http://www.fiseaprende.com/');
    }
   
?>
<?php 
    error_reporting(E_ALL ^ E_NOTICE);
    global $ini;     $ini    =addslashes(htmlspecialchars(strip_tags(trim($_GET['ini']))));
    global $rco;     $rco    =addslashes(htmlspecialchars(strip_tags(trim($_GET['rco']))));
    global $cs;      $cs     =addslashes(htmlspecialchars(strip_tags(trim($_GET['cs']))));
    global $tb;      $tb     =addslashes(htmlspecialchars(strip_tags(trim($_GET['tb']))));
    global $fichas;  $fichas =addslashes(htmlspecialchars(strip_tags(trim($_GET['fichas']))));
    global $mat;     $mat    =addslashes(htmlspecialchars(strip_tags(trim($_GET['mat']))));
    global $list;    $list   =addslashes(htmlspecialchars(strip_tags(trim($_GET['list']))));
    global $aport;   $aport  =addslashes(htmlspecialchars(strip_tags(trim($_GET['aport']))));
    global $md;      $md     =addslashes(htmlspecialchars(strip_tags(trim($_GET['md']))));
    global $pref;    $pref   =addslashes(htmlspecialchars(strip_tags(trim($_GET['pref']))));
    global $sub;     $sub    =addslashes(htmlspecialchars(strip_tags(trim($_GET['sub']))));
    global $mod;     $mod    =addslashes(htmlspecialchars(strip_tags(trim($_GET['mod']))));
    global $camb;     $camb    =addslashes(htmlspecialchars(strip_tags(trim($_GET['camb']))));
    
 ?>
<?php error_reporting(E_ALL ^ E_NOTICE); $mensaje=$_GET['mens'];
    if (isset($mensaje)) {
        echo "
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='alert alert-info'>
                    <button class='close' data-dismiss='alert'><span>&times;</span></button>
                    <strong>$mensaje</strong>                            
                </div>
            </div>
        </div>
                ";   
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
	<meta name="viewport" content="width=device-width,  initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" href="../css/bootstrapset.css">
        <link rel="stylesheet" href="../css/user.css">
	<link rel="stylesheet" href="../js/bootstrap.js">
	<link rel="shortcut icon" href="../image/icono.jpg">
        <script src="http://code.jquery.com/jquery.js"></script>

</head>
<style>
         
</style>
<body>
	<?php include_once("../analyticstracking.php") ?>
	<?php include("../headersetus.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default fkus">
                    <div class="panel-body">
                        
                        <div class="col-md-3 menu">  
                                <ul>
                                    <li><a href="?ini=inicio">Inicio</a></li>
                                    <li><a href="?rco=rco&pet=pet">Recomendaciones</a></li>
                                    <li><a href="?cs=cs&tb=tb">Contenidos Guardados</a></li>
                                    <li><a href="?aport=aport">Mis aportaciones</a></li>
                                    <li><a href="?pref=pref&tb=tb">Preferencias</a></li>
                                    <li><a href="?sub=sub">Subir contenido</a></li>
                                    <li><a href="?mod=mod">Modificar perfil</a></li>
                                    <li><a href="cerrarfise.php">Cerrar Sesión</a></li>
                                </ul>
                        </div>
                        <?php include("controladoruser.php") ?>
                        
                    </div>

                </div>

            </div>
        </div>
    </div>
    <br>
    <?php include('../footerset.php'); ?>

	<script src="../js/bootstrap.min.js"></script>
    
</body>
</html>		