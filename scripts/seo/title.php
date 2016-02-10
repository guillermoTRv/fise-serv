<?php 
	if ($un!='' and $t=='' and $cont=='') {
		echo $un;
	}
	if ($un!='' and $t!='' and $cont=='') {
		echo $tm;
	}
	if ($cont!='') {
		echo $tit;
	}
	if ($u=='Subir') {
		echo "Subir un contenido de $materia";
	}
 ?>