<?php 
        if ($materia=="Algebra basica") {
		header("Location:http://fiseaprende.com/basica/panelalgbas?un=".$unidad_fichal."&cont=".$id."&mens=".$mensaje."");
	}
	if ($materia=="Algebra intermedia") {
		header("Location:http://fiseaprende.com/algintermedia/panelalg?un=".$unidad_fichal."&cont=".$id."&mens=".$mensaje."");
	}
	if ($materia=="Trigonometria") {
		header("Location:http://fiseaprende.com/trigonometria/paneltrig?un=".$unidad_fichal."&cont=".$id."&mens=".$mensaje."");
	}
	if ($materia=="Geometria analitica") {
		header("Location:http://fiseaprende.com/geometrianalitica/panelgeo?un=".$unidad_fichal."&cont=".$id."&mens=".$mensaje."");
	}
	if ($materia=="Estadistica") {
		header("Location:http://fiseaprende.com/estadistica/panelest?un=".$unidad_fichal."&cont=".$id."&mens=".$mensaje."");
	}
	if ($materia=="Calculo diferencial") {
		header("Location:http://fiseaprende.com/calculodif/paneldif?un=".$unidad_fichal."&cont=".$id."&mens=".$mensaje."");
	}
	if ($materia=="Calculo integral") {
		header("Location:http://fiseaprende.com/calculointegral/panelint?un=".$unidad_fichal."&cont=".$id."&mens=".$mensaje."");
	}
        if ($materia=="Calculo avanzado") {
		header("Location:http://fiseaprende.com/c-avanzado/panelcalculo?un=".$unidad_fichal."&cont=".$id."&mens=".$mensaje."");
	}
        if ($materia=="Algebra lineal") {
		header("Location:http://fiseaprende.com/lineal/panel-lineal?un=".$unidad_fichal."&cont=".$id."&mens=".$mensaje."");
	}
        if ($materia=="Ecuaciones diferenciales") {
		header("Location:http://fiseaprende.com/diferenciales/ecuaciones-diferenciales?un=".$unidad_fichal."&cont=".$id."&mens=".$mensaje."");
	}
 ?>