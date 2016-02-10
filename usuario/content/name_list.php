<?php 
	if ($mat!='' && $list=='') {
		echo $mat;
	}
	if ($mat=='' && $list!='') {
		echo $list;
	}
	if ($mat=='' && $list=='') {
		echo "Todos los contenidos agregados";
	}
 ?>