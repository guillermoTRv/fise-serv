<style type="text/css">
	a.tdd {
		text-decoration:none;

	}
	a.tdd:hover{
		text-decoration:none;
	}
</style>
<center><div><h2 class="enc" style='margin-bottom:35px;'>Contenidos agregados recientemente</h2></div></center>   
<div class="col-md-10 col-md-offset-1">
	<table class="table ">
	    <tbody>
	    	<?php 
	    	    include("config.php");
	    		$rec="SELECT id_fichamat,materia,unidad,titulo FROM ficha_contenido_materia ORDER BY id_fichamat desc limit 10";
	    		$ejec=$conexion->query($rec);
	    		while ($a=mysqli_fetch_array($ejec)) {
	    			$id=$a[0];
	    			$materia=$a[1];
	    			$unidad=$a[2];
	    			$titulo=$a[3];
	    				if ($materia=="Algebra basica") {
							echo "
				    			<tr>
						          <td><strong><a class='tdd' href='http://fiseaprende.com/basica/panelalgbas?un=$unidad&cont=$id' target='_blank'>$titulo</a></strong></td>
						          <td><strong>$unidad</strong></td>
                                                        </tr>
                                                        
				    			";
						}
						if ($materia=="Algebra intermedia") {
								echo "
				    			<tr>
						          <td><strong><a class='tdd' href='http://fiseaprende.com/algintermedia/panelalg?un=$unidad&cont=$id' target='_blank'>$titulo</a></strong></td>
                                                           <td><strong>$unidad</strong></td>
						        </tr>
				    			";

						}
						if ($materia=="Trigonometria") {
								echo "
				    			<tr>
						          <td><strong><a class='tdd' href='http://fiseaprende.com/trigonometria/paneltrig?un=$unidad&cont=$id' target='_blank'>$titulo</a></strong></td>
                                                          <td><strong>$unidad</strong></td>
						        </tr>
				    			";
						}
						if ($materia=="Geometria analitica") {
								echo "
				    			<tr>
						          <td><strong><a class='tdd' href='http://fiseaprende.com/gemetrianalitica/panelgeo?un=$unidad&cont=$id' target='_blank'>$titulo</a></strong></td>
						          <td><strong>$unidad</strong></td> 
                                                       </tr>
                                                        ";
						}
						if ($materia=="Estadistica") {
								echo "
				    			<tr>
						          <td><strong><a class='tdd' href='http://fiseaprende.com/estadistica/panelest?un=$unidad&cont=$id' target='_blank'>$titulo</a></strong></td>
						          <td><strong>$unidad</strong></td>
                                                        </tr>
                                                       ";
						}
						if ($materia=="Calculo diferencial") {
								echo "
				    			<tr>
						          <td><strong><a class='tdd' href='http://fiseaprende.com/calculodif/paneldif?un=$unidad&cont=$id' target='_blank'>$titulo</a></strong></td>
                                                          <td><strong>$unidad</strong></td>
 						        </tr>
				    			";	
						}
						if ($materia=="Calculo integral") {
								echo "
				    			<tr>
						          <td><strong><a class='tdd' href='http://fiseaprende.com/calculointegral/panelint?un=$unidad&cont=$id' target='_blank'>$titulo</a></strong></td>
                                                          <td><strong>$unidad</strong></td>
						        </tr>
				    			";	
						}
                                                if ($materia=="Calculo avanzado") {
								echo "
				    			<tr>
						          <td><strong><a class='tdd' href='http://fiseaprende.com/c-avanzado/panelcalculo?un=$unidad&cont=$id' target='_blank'>$titulo</a></strong></td>
                                                          <td><strong>$unidad</strong></td>
						        </tr>
				    			";	
						}
                                                if ($materia=="Algebra lineal") {
								echo "
				    			<tr>
						          <td><strong><a class='tdd' href='http://www.fiseaprende.com/lineal/panel-lineal?un=$unidad&cont=$id' target='_blank'>$titulo</a></strong></td>
                                                          <td><strong>$unidad</strong></td>
						        </tr>
				    			";	
						}
		    			
	    		}
	    	 ?>
	    	

	        
	   	</tbody>
	</table>
 <hr><br><br><br>
</div>
<br>
				