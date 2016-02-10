<div class="row"> 
	<div class="col-md-7">
		<table class="table ">
	    <thead>
	        <tr>   
	          <th>Usuario</th>
	          <th>Materia</th>
	          <th>Fecha</th>
	        </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    	$for="SELECT * FROM recomendaciones_mat ORDER BY id_reco desc limit 10";
			$efor=$conexion->query($for);
            while ($ar=mysqli_fetch_array($efor)) {
            	$id_reco=$ar[0];
            	$id_user=$ar[1];
            	$materia=$ar[2];
            	$fecha_registro_reco=$ar[4];

            	$resp="SELECT COUNT(*) FROM coment_reco WHERE id_reco='$id_reco'";
				$eresp=$conexion->query($resp);
				$xh=$eresp->fetch_array();
				$resp=$xh[0];
				echo "
				<tr>
		          <td>$id_user</td>
		          <td>$materia</td>
		          <td>$fecha_registro_reco</td>
		          <td>$resp</td>
		        </tr>
				";

            }
		    ?>
	   	</tbody>
	</table>
	</div>
</div>