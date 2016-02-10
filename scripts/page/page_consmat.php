<?php 
	if (isset($_GET['pos'])) {
				$ini=$_GET['pos'];
			}
			else{$ini=1;}
			$limit_end=6;
			$init=($ini-1)*$limit_end;

			$count_unidad="SELECT COUNT(*) FROM ficha_contenido_materia WHERE unidad='$un' and consideracion='Ejercicio-Problema'";
			$num=$conexion->query($count_unidad);
			$x=$num->fetch_array();
			$total=ceil($x[0]/$limit_end);
			
			$select_unidad="SELECT * FROM ficha_contenido_materia WHERE unidad='$un' and consideracion='Ejercicio-Problema' order by id_fichamat desc LIMIT $init, $limit_end";
			$c=$conexion->query($select_unidad);
			while($registro = mysqli_fetch_array($c)){
				include("panel/fichas.php");

			}

			if (!$x[0]==0) {
			echo "<div>";
			echo "<ul class='pagination'>";
				
				if (($ini-1)==0) {
					echo"<li><a href='#'>&laquo;</a><li/>";
				}
				else{
					echo "<li><a href='?un=$u&cons=$cons&pos=".($ini-1)."'><b>&laquo;</b></a></li>";
				}
				
				for ($k=1; $k<=$total ; $k++) { 
					
					if ($ini==$k) {
						echo"<li><a href='#'><b>".$k."</b></a></li>";
					}
					else{
						echo "<li><a href='?un=$u&cons=$cons&pos=$k'>".$k."</a><li>";
					}
				}
				
				if ($ini==$total) {
					echo "<li><a href='#'>&raquo;</a></li>";
				}
				else{
					echo "<li><a href='?un=$u&cons=$cons&pos=".($ini+1)."'><b>&raquo;</b></a></li>";
				}



				

				
			echo "</ul>";
			echo "</div>";
			}
			else{
				echo "<br><p class='fen'>Aun no hay contenidos en esta zona, si gustas puedes recomendarnos alguno </p>";
			}

			
 ?>
