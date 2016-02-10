<?php 

	if($un!='' && $tm=='' && $by=='' && $cons=='' && $prf==''){
		$b_num="SELECT COUNT(id_fichamat) FROM ficha_contenido_materia WHERE materia='$materia' and unidad='$un'";
		$e_num=$conexion->query($b_num);
		$a_num=$e_num->fetch_array();
		$num=$a_num[0];
		echo "Todos los contenidos de la unidad &nbsp;<a class='amounmat'><strong>$num contenidos</strong></a>";
	}
	if($un!='' && $tm!='' && $by=='' && $cons=='' && $prf==''){
		$b_num="SELECT COUNT(id_fichamat) FROM ficha_contenido_materia WHERE unidad='$un' and tema='$tm'";
		$e_num=$conexion->query($b_num);
		$a_num=$e_num->fetch_array();
		$num=$a_num[0];
		echo "Busqueda por tema &nbsp;<a class='amounmat'><strong>$num contenidos</strong></a>";
	}
	if($un!='' && $tm=='' && $by!='' && $cons=='' && $prf=='') {
		$b_num="SELECT COUNT(id_fichamat) FROM ficha_contenido_materia WHERE unidad='$un' and tipo_material='$by'";
		$e_num=$conexion->query($b_num);
		$a_num=$e_num->fetch_array();
		$num=$a_num[0];
		echo "Busqueda por $by de la unidad&nbsp;&nbsp;<a class='amounmat'><strong>$num contenidos</strong></a>";
	}
	if($un!='' && $tm=='' && $by=='' && $cons!='' && $prf==''){
		$b_num="SELECT COUNT(id_fichamat) FROM ficha_contenido_materia WHERE unidad='$un' and consideracion='$cons'";
		$e_num=$conexion->query($b_num);
		$a_num=$e_num->fetch_array();
		$num=$a_num[0];
		echo "Busqueda por Ejercicios-Problemas de la unidad &nbsp;<a class='amounmat'><strong>$num contenidos</strong></a>";
	}
	if ($un!='' && $tm=='' && $by=='' && $cons=='' && $prf!='') {
		$b_num="SELECT COUNT(id_fichamat) FROM ficha_contenido_materia WHERE unidad='$un'";
		$e_num=$conexion->query($b_num);
		$a_num=$e_num->fetch_array();
		$num=$a_num[0];
		echo "Contenidos preferentes &nbsp;<a class='amounmat'><strong>$num contenidos</strong></a>";
	}

 ?>