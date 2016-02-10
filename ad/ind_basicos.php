<?php 
	include("../config.php");
	$uno="SELECT COUNT(*) FROM usuariosfise";
	$euno=$conexion->query($uno);
	$x=$euno->fetch_array();
	$user=$x[0];

	$dos="SELECT COUNT(*) FROM ficha_contenido_materia";
	$edos=$conexion->query($dos);
	$xf=$edos->fetch_array();
	$fichas=$xf[0];
        
        $tres="SELECT COUNT(*) FROM recomendaciones_mat";
	$etres=$conexion->query($tres);
	$xg=$etres->fetch_array();
	$reco=$xg[0];
 ?>
<div class="row"> 
	<div class="col-md-7">
		<table class="table ">
	    <thead>
	        <tr>   
	          <th>Indicador</th>
	          <th>Número</th>
	        </tr>
	    </thead>
	    <tbody>
	    	<tr>
	          <td>Número de usuarios registrados</td>
	          <td><?php echo $user ?></td>
	        </tr>

	        <tr>
	          <td>Número de contenidos registrados</td>
	          <td><?php echo $fichas ?></td>
	        </tr>

                <tr>
	          <td><a href="?reco=true">Recomendaciones pedidas</a></td>
	          <td><?php echo $reco ?></td>
	        </tr>
	   	</tbody>
	</table>
	</div>
</div>
<?php 
    error_reporting(E_ALL ^ E_NOTICE);
    $reco=$_GET['reco'];
	if (isset($reco)) {
		include("reco_num.php");
	}
 ?>
<hr>
<?php include("maters.php"); ?>
<div class="row">
	<div class="col-md-7">
		<table class="table ">
	    <thead>
	        <tr>   
	          <th>Materia</th>
	          <th>Contenidos</th>
	        </tr>
	    </thead>
	    <tbody>
	    	<tr>
	          <td><a href="http://fiseaprende.com/ad/administrador?mat=Algebra basica">Algebra basica</a></td>
	          <td><?php echo $bas ?></td>
	        </tr>

	        <tr>
	          <td><a href="http://fiseaprende.com/ad/administrador?mat=Algebra intermedia">Algebra intermedia</a></td>
	          <td><?php echo $int ?></td>
	        </tr>

	        <tr>
	          <td><a href="http://fiseaprende.com/ad/administrador?mat=Trigonometria">Trigonometria</a></td>
	          <td><?php echo $trig ?></td>
	        </tr>

	        <tr>
	          <td><a href="http://fiseaprende.com/ad/administrador?mat=Geometria analitica">Geometria analitica</a></td>
	          <td><?php echo $geo ?></td>
	        </tr>

	        <tr>
	          <td><a href="http://fiseaprende.com/ad/administrador?mat=Estadistica">Estadistica</a></td>
	          <td><?php echo $est ?></td>
	        </tr>

	        <tr>
	          <td><a href="http://fiseaprende.com/ad/administrador?mat=Calculo diferencial">Calculo diferencial</a></td>
	          <td><?php echo $dif ?></td>
	        </tr>

	        <tr>
	          <td><a href="http://fiseaprende.com/ad/administrador?mat=Calculo integral">Calculo integral</a></td>
	          <td><?php echo $inte ?></td>
	        </tr>

                <tr>
	          <td><a href="http://fiseaprende.com/ad/administrador?mat=Calculo avanzado">Calculo avanzado</a></td>
	          <td><?php echo $avanz ?></td>
	        </tr>

                <tr>
	          <td><a href="http://fiseaprende.com/ad/administrador?mat=Algebra lineal">Algebra lineal</a></td>
	          <td><?php echo $lineal ?></td>
	        </tr>	   	
            </tbody>
	</table>

	</div>
</div>
<?php 
    error_reporting(E_ALL ^ E_NOTICE);
    $mat_a=$_GET['mat'];
	if (isset($mat_a)) {
	include("conteounidades.php");		
	}
?>
<br><br><br><br><br><br>