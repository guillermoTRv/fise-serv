<?php 
	if ($materia=="Algebra basica") {
		echo "
                <a style='text-decoration:none' href='http://fiseaprende.com/basica/recobas?rec=$id_r'>
                    <p class='lreco'><span class='glyphicon glyphicon-comment'></span>
                        $texto_r
                    </p>
                </a>
            ";
	}
	if ($materia=="Algebra intermedia") {
		echo "
                <a style='text-decoration:none' href='http://fiseaprende.com/algintermedia/recoalg?rec=$id_r'>
                    <p class='lreco'><span class='glyphicon glyphicon-comment'></span>
                        $texto_r
                    </p>
                </a>
            ";
	}
	if ($materia=="Trigonometria") {
		echo "
                <a style='text-decoration:none' href='http://fiseaprende.com/trigonometria/recotrig?rec=$id_r'>
                    <p class='lreco'><span class='glyphicon glyphicon-comment'></span>
                        $texto_r
                    </p>
                </a>
            ";
	}
	if ($materia=="Geometria analitica") {
		echo "
                <a style='text-decoration:none' href='http://fiseaprende.com/geometrianalitica/recogeo?rec=$id_r'>
                    <p class='lreco'><span class='glyphicon glyphicon-comment'></span>
                        $texto_r
                    </p>
                </a>
            ";
	}
	if ($materia=="Estadistica") {
		echo "
                <a style='text-decoration:none' href='http://fiseaprende.com/estadistica/recoest?rec=$id_r'>
                    <p class='lreco'><span class='glyphicon glyphicon-comment'></span>
                        $texto_r
                    </p>
                </a>
            ";
	}
	if ($materia=="Calculo diferencial") {
		echo "
                <a style='text-decoration:none' href='http://fiseaprende.com/calculodif/recodif?rec=$id_r'>
                    <p class='lreco'><span class='glyphicon glyphicon-comment'></span>
                        $texto_r
                    </p>
                </a>
            ";
	}
	if ($materia=="Calculo integral") {
		echo "
                <a style='text-decoration:none' href='http://fiseaprende.com/calculointegral/recoint?rec=$id_r'>
                    <p class='lreco'><span class='glyphicon glyphicon-comment'></span>
                        $texto_r
                    </p>
                </a>
            ";
	}
        if ($materia=="Calculo avanzado") {
		echo "
                <a style='text-decoration:none' href='http://fiseaprende.com/c-avanzado/recocalculo?rec=$id_r'>
                    <p class='lreco'><span class='glyphicon glyphicon-comment'></span>
                        $texto_r
                    </p>
                </a>
            ";
	}
        if ($materia=="Algebra lineal") {
		echo "
                <a style='text-decoration:none' href='http://fiseaprende.com/lineal/recolineal?rec=$id_r'>
                    <p class='lreco'><span class='glyphicon glyphicon-comment'></span>
                        $texto_r
                    </p>
                </a>
            ";
	}
        if ($materia=="Ecuaciones diferenciales") {
		echo "
                <a style='text-decoration:none' href='http://fiseaprende.com/diferenciales/recodiferenciales?rec=$id_r'>
                    <p class='lreco'><span class='glyphicon glyphicon-comment'></span>
                        $texto_r
                    </p>
                </a>
            ";
	}
 ?>