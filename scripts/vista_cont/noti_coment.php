<?php 
	if ($materia=="Algebra basica") {
		global $url_notification;
		$url_notification="http://www.fiseaprende.com/basica/panelalgbas?un=".$unidad."&cont=".$id_fichamat;
	}
                if ($materia=="Algebra intermedia") {
		global $url_notification;
		$url_notification="http://www.fiseaprende.com/algintermedia/panelalg?un=".$unidad."&cont=".$id_fichamat;
	}
		if ($materia=="Trigonometria") {
		global $url_notification;
		$url_notification="http://www.fiseaprende.com/trigonometria/paneltrig?un=".$unidad."&cont=".$id_fichamat;
	}
		if ($materia=="Geometria analitica") {
		global $url_notification;
		$url_notification="http://www.fiseaprende.com/geometrianalitica/panelgeo?un=".$unidad."&cont=".$id_fichamat;
	}
		if ($materia=="Estadistica") {
		global $url_notification;
		$url_notification="http://www.fiseaprende.com/estadistica/panelest?un=".$unidad."&cont=".$id_fichamat;
	}
		if ($materia=="Calculo diferencial") {
		global $url_notification;
		$url_notification="http://www.fiseaprende.com/calculodif/panelint?un=".$unidad."&cont=".$id_fichamat;
	}
		if ($materia=="Calculo integral") {
		global $url_notification;
		$url_notification="http://www.fiseaprende.com/calculointegral/paneldif?un=".$unidad."&cont=".$id_fichamat;
	}
                if ($materia=="Calculo avanzado") {
		global $url_notification;
		$url_notification="http://www.fiseaprende.com/c-avanzado/panelcalculo?un=".$unidad."&cont=".$id_fichamat;
	}
                if ($materia=="Algebra lineal") {
	 	global $url_notification;
		$url_notification="http://www.fiseaprende.com/lineal/panel-lineal?un=".$unidad."&cont=".$id_fichamat;
	}
                if ($materia=="Ecuaciones diferenciales") {
	 	global $url_notification;
		$url_notification="http://www.fiseaprende.com/diferenciales/ecuaciones-diferenciales?un=".$unidad."&cont=".$id_fichamat;
	}
 ?>