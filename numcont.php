<?php
	include("config.php"); 
	include("ad/maters.php");
 ?>
 	<br>
<div class="col-md-10 col-md-offset-1">
	<table class="table ">
	    <thead>
	        <tr>   
	          <th>Materia</th>
	          <th>Contenidos</th>
	        </tr>
	    </thead>
	    <tbody>
	    	<tr>
	          <td>Álgebra básica</td>
	          <td><?php echo $bas ?></td>
	        </tr>

	        <tr>
	          <td>Álgebra intermedia</td>
	          <td><?php echo $int ?></td>
	        </tr>

	        <tr>
	          <td>Trigonometría</td>
	          <td><?php echo $trig ?></td>
	        </tr>

	        <tr>
	          <td>Geometría analítica</td>
	          <td><?php echo $geo ?></td>
	        </tr>

	        <tr>
	          <td>Estadística</td>
	          <td><?php echo $est ?></td>
	        </tr>

	        <tr>
	          <td>Calculo diferencial</td>
	          <td><?php echo $dif ?></td>
	        </tr>

	        <tr>
	          <td>Calculo integral</td>
	          <td><?php echo $inte ?></td>
	        </tr>
	   	</tbody>
	</table>
 </div>