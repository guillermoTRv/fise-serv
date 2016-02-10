<div class='col-md-10 col-md-offset-1 lief'>
<?php 
	$b_recientes="SELECT id_fichamat,materia,unidad,titulo,descripcion_texto,fecha_registro_fichamat FROM ficha_contenido_materia WHERE materia='$materia' order by id_fichamat desc limit 8";
	$e_recientes=$conexion->query($b_recientes);
	while ($array=mysqli_fetch_array($e_recientes)) {
		$nombre=$array['titulo'];
		$texto=$array['descripcion_texto'];
		$unidad=utf8_decode($array['unidad']);
                $uni_rl=urls_amigables($unidad);
		$id=$array['id_fichamat'];
                if ($materia=="Algebra basica") {
			global $url;
			$url="http://fiseaprende.com/basica/panelalgbas?un=$uni_rl&cont=$id";
		}
		if ($materia=="Algebra intermedia") {
			global $url;
			$url="http://fiseaprende.com/algintermedia/panelalg?un=$uni_rl&cont=$id";
		}
		if ($materia=="Trigonometria") {
			global $url;
			$url="http://fiseaprende.com/trigonometria/paneltrig?un=$uni_rl&cont=$id";
		}
		if ($materia=="Geometria analitica") {
			global $url;
			$url="http://fiseaprende.com/geometrianalitica/panelgeo?un=$uni_rl&cont=$id";
		}
		if ($materia=="Estadistica") {
			global $url;
			$url="http://fiseaprende.com/estadistica/panelest?un=$uni_rl&cont=$id";
		}
		if ($materia=="Calculo diferencial") {
			global $url;
			$url="http://fiseaprende.com/calculodif/paneldif?un=$uni_rl&cont=$id";
		}
		if ($materia=="Calculo integral") {
			global $url;
			$url="http://fiseaprende.com/calculointegral/panelint?un=$uni_rl&cont=$id";
		}
                if ($materia=="Calculo avanzado") {
			global $url;
			$url="http://fiseaprende.com/c-avanzado/panelcalculo?un=$uni_rl&cont=$id";
		}
                if ($materia=="Algebra lineal") {
			global $url;
			$url="http://fiseaprende.com/lineal/panel-lineal?un=$uni_rl&cont=$id";
		}
                if ($materia=="Ecuaciones diferenciales") {
			global $url;
			$url="http://fiseaprende.com/diferenciales/ecuaciones-diferenciales?un=$uni_rl&cont=$id";
		}
		echo "
	    <div class='col-md-3'>
                <div style='height:180px;' class='panel panel-info fk borderdefalg'>
                  <div style='height:100px;'>
                  	<div class='modulep line-clamp'><strong>$nombre</strong></div>
                  	<div class='reci'>
							<div class='module line-clampp'><p>$texto</p></div>
						</div>
                  </div>  
                    
					<a href='$url'><div class='btn btn-ind'>ver contenido</div></a>
                </div>
            </div>
		";
	}
 ?>
</div>