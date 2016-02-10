<h4>Haz respondido lo siguiente</h4>
<?php 
	session_start();
	$myid = $_SESSION['id_usuario'];
	$busqueda="SELECT id_comentreco,id_reco,id_user,texto_creco,link_reco,fecha_reg_creco,responde FROM coment_reco WHERE id_user='$myid' order by id_comentreco desc";
	$ejecutar=$conexion->query($busqueda);
	while ($a=mysqli_fetch_array($ejecutar)) {
		$id_comentreco=$a[0];
		$texto_creco=$a['texto_creco'];
		$link_reco=$a['link_reco'];
		$fecha=$a['fecha_reg_creco'];
		$responde=$a['responde'];
		echo "
			<div style='margin-left:14px;'>
				<p class='lresp'>$texto_creco</p>
				<a class='jun' target='_blank' href='$link_reco'>$link_reco</a><br>
				<a class='jun' href='#$id_comentreco' data-toggle='modal'><span class='glyphicon glyphicon-cog'></span></a><small><em> Respondiste a: $responde &nbsp; el: $fecha</em></small>
			</div>
			<br>			
		";
		include("reco/respuestas/modalrespuestas.php");
	}
?>
