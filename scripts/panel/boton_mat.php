<center>
 <div class="dropdown">
 <button <?php echo $css_b; ?> class="btn dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Tipos de materiales
     <span class="caret"></span>
 </button>
 		<ul class='dropdown-menu hovermat' aria-labelledby='dropdownMenu1'>
 			<?php 
 				include("../botontipos.php");
 			?>
 		</ul>
</div>
</center>
<div class='media'>
	<div class='media-body'>
		<center>
			<?php echo "
			<a href='?un=$u&cons=ejercicio-problema'class='btn btn-sm btn-ind'><strong>&nbsp;&nbsp;Ejercicios y Problemas&nbsp;&nbsp;</strong></a>"
			;?>
		</center>
	</div>
</div>

<div class='media'>
	<div class='media-body'>
		<center>
			<?php echo "
			<a href='?un=$u&prf=prf'class='btn btn-sm btn-ind'><strong>&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-star'></span> Mas destacados &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></a>"
			;?>
		</center>
	</div>
</div>

<div class='media'>
	<div class='media-body'>
		<center>
			<?php echo "
			<a href='?un=$u&by=aplicaciones-digitales'class='btn btn-sm btn-ind'><strong>&nbsp;<span class='glyphicon glyphicon-asterisk'></span> Aplicaciones digitales </strong></a>"
			;?>
		</center>
	</div>
</div>

<br>