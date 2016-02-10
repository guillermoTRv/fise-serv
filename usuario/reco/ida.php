<?php 
	if ($materia=="Algebra basica") {
		echo "
			<a class='lkn' href='http://fiseaprende.com/basica/recobas?rec=$id_reco'>
                  	<span class='glyphicon glyphicon-triangle-right'></span>Ver
            </a>&nbsp;	
		";
	}
	if ($materia=="Algebra intermedia") {
		echo "
			<a class='lkn' href='http://fiseaprende.com/algintermedia/recoalg?rec=$id_reco'>
                  	<span class='glyphicon glyphicon-triangle-right'></span>Ver
            </a>&nbsp;
		";
	}
	if ($materia=="Trigonometria") {
		echo "
			<a class='lkn' href='http://fiseaprende.com/trigonometria/recotrig?rec=$id_reco'>
                  	<span class='glyphicon glyphicon-triangle-right'></span>Ver
            </a>&nbsp;
		";
	}
	if ($materia=="Geometria analitica") {
		echo "
			<a class='lkn' href='http://fiseaprende.com/geometrianalitica/recogeo?rec=$id_reco'>
                  	<span class='glyphicon glyphicon-triangle-right'></span>Ver
            </a>&nbsp;
		";
	}
	if ($materia=="Estadistica") {
		echo "
			<a class='lkn' href='http://fiseaprende.com/estadistica/recoest?rec=$id_reco'>
                  	<span class='glyphicon glyphicon-triangle-right'></span>Ver
            </a>&nbsp;
		";
	}
	if ($materia=="Calculo diferencial") {
		echo "
			<a class='lkn' href='http://fiseaprende.com/calculodif/recodif?rec=$id_reco' data-toggle='modal'>
                  	<span class='glyphicon glyphicon-triangle-right'></span>Ver
            </a>&nbsp;
		";
	}
	if ($materia=="Calculo integral") {
		echo "
			<a class='lkn' href='http://fiseaprende.com/calculoint/recoint?rec=$id_reco' data-toggle='modal'>
                  	<span class='glyphicon glyphicon-triangle-right'></span>Ver
            </a>&nbsp;
		";
	}
        if ($materia=="Calculo avanzado") {
		echo "
			<a class='lkn' href='http://fiseaprende.com/c-avanzado/recocalculo?rec=$id_reco' data-toggle='modal'>
                  	<span class='glyphicon glyphicon-triangle-right'></span>Ver
            </a>&nbsp;
		";
	}
        if ($materia=="Algebra lineal") {
		echo "
			<a class='lkn' href='http://fiseaprende.com/lineal/recolineal?rec=$id_reco' data-toggle='modal'>
                  	<span class='glyphicon glyphicon-triangle-right'></span>Ver
            </a>&nbsp;
		";
	}
        if ($materia=="Ecuaciones diferenciales") {
		echo "
			<a class='lkn' href='http://fiseaprende.com/diferenciales/recodiferenciales?rec=$id_reco' data-toggle='modal'>
                  	<span class='glyphicon glyphicon-triangle-right'></span>Ver
            </a>&nbsp;
		";
	}
?>
