<?php 
	session_start();
	$myid = $_SESSION['id_usuario'];
	$contador="SELECT COUNT(*) FROM recomendaciones_mat WHERE id_user=$myid";
	$eje_cont=$conexion->query($contador);
	$numa=$eje_cont->fetch_array();
	$numeros=$numa[0];
 ?>
<h4 style="font-family:cursive;">Haz pedido <?php echo $numeros ?> recomendaciones</h4><br>
<?php 
	$consulta="SELECT id_reco,id_user,materia,texto_reco,fecha_registro_reco FROM recomendaciones_mat WHERE id_user='$myid' order by id_reco desc";
	$ejecutar=$conexion->query($consulta);
	while ($a=mysqli_fetch_array($ejecutar)) {
		$id_reco=$a['id_reco'];
		$texto=$a['texto_reco'];
		$materia=$a['materia'];
		$fcg=$a['fecha_registro_reco'];
		$compuesto=$id_reco."c";



		echo "
			<div class='panel panel-default pan'>
              <div class='panel-body'>
                <p class='lreco'>$texto</p>
                <p class='pdesc'>Creado el $fcg &nbsp; Materia:$materia</p>
                
                <p>";
            include("reco/ida.php");      
        echo "    <a class='lkn' href='#$id_reco' data-toggle='modal'>
                  	<span class='glyphicon glyphicon-cog'></span> Opciones
                  </a> 
                </p>

              </div>
           	</div>
		";
		include("reco/modalmodificar.php");
	}
 ?>