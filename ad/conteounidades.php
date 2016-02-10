<div class="row"> 
	<div class="col-md-7">
		<table class="table ">
	    <thead>
	        <tr>   
	          <th>Indicador</th>
	          <th>Numero</th>
	        </tr>
	    </thead>
	    <tbody>
			<?php 
				$unidades="SELECT * FROM unidades_materias WHERE materia='$mat_a'";
				$ejecutar=$conexion->query($unidades);
				while ($a_un=mysqli_fetch_array($ejecutar)) {
						$un=$a_un['unidad'];
						$numeros="SELECT COUNT(*) FROM ficha_contenido_materia WHERE materia='$mat_a' and unidad='$un'";
						$e_num=$conexion->query($numeros);
						$cont=$e_num->fetch_array();
						$n=$cont[0];
						echo "
							<tr>
					          <td>$un</td>
					          <td><strong>$n</strong></td>
					        </tr>
						";
						
					}	
			 ?>		
		</tbody>
		</table>
	</div>
</div>
<hr>
