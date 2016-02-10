<?php 
	$mt=addslashes(htmlspecialchars(strip_tags(trim($_POST['mt']))));
	if ($mt=="Algebra basica") {
		header("Location: http://fiseaprende.com/basica/recobas?rec=$id_reco");
	}
	if ($mt=="Algebra intermedia") {
		header("Location: http://fiseaprende.com/algintermedia/recoalg?rec=$id_reco");
	}
	if ($mt=="Trigonometria") {
		header("Location: http://fiseaprende.com/trigonometria/recotrig?rec=$id_reco");
	}
	if ($mt=="Geometria analitica") {
		header("Location: http://fiseaprende.com/geometrianalitica/recogeo?rec=$id_reco");
	}
	if ($mt=="Estadistica") {
		header("Location: http://fiseaprende.com/estadistica/recoest?rec=$id_reco");
	}
	if ($mt=="Calculo diferencial") {
		header("Location: http://fiseaprende.com/calculodif/recodif?rec=$id_reco");
	}
	if ($mt=="Calculo integral") {
		header("Location: http://fiseaprende.com/calculointegral/recoint?rec=$id_reco");
	}
        if ($mt=="Calculo avanzado") {
		header("Location: http://fiseaprende.com/c-avanzado/recocalculo?rec=$id_reco");
	}
        if ($mt=="Algebra lineal") {
		header("Location: http://fiseaprende.com/lineal/recolineal?rec=$id_reco");
	}
        if ($mt=="Ecuaciones diferenciales") {
		header("Location: http://fiseaprende.com/diferenciales/recodiferenciales?rec=$id_reco");
	}
 ?>
