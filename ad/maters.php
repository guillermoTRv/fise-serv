<?php 
	$b_alg="SELECT COUNT(*) FROM ficha_contenido_materia WHERE materia='Algebra basica'";
	$e_alg=$conexion->query($b_alg);
	$a_alg=$e_alg->fetch_array();
	$bas=$a_alg[0];

	$b_int="SELECT COUNT(*) FROM ficha_contenido_materia WHERE materia='Algebra intermedia'";
	$e_int=$conexion->query($b_int);
	$a_int=$e_int->fetch_array();
	$int=$a_int[0];

	$b_trig="SELECT COUNT(*) FROM ficha_contenido_materia WHERE materia='Trigonometria'";
	$e_trig=$conexion->query($b_trig);
	$a_trig=$e_trig->fetch_array();
	$trig=$a_trig[0];

	$b_geo="SELECT COUNT(*) FROM ficha_contenido_materia WHERE materia='Geometria analitica'";
	$e_geo=$conexion->query($b_geo);
	$a_geo=$e_geo->fetch_array();
	$geo=$a_geo[0];

	$b_est="SELECT COUNT(*) FROM ficha_contenido_materia WHERE materia='Estadistica'";
	$e_est=$conexion->query($b_est);
	$a_est=$e_est->fetch_array();
	$est=$a_est[0];

	$b_dif="SELECT COUNT(*) FROM ficha_contenido_materia WHERE materia='Calculo diferencial'";
	$e_dif=$conexion->query($b_dif);
	$a_dif=$e_dif->fetch_array();
	$dif=$a_dif[0];

	$b_inte="SELECT COUNT(*) FROM ficha_contenido_materia WHERE materia='Calculo integral'";
	$e_inte=$conexion->query($b_inte);
	$a_inte=$e_inte->fetch_array();
	$inte=$a_inte[0];

        $b_c="SELECT COUNT(*) FROM ficha_contenido_materia WHERE materia='Calculo avanzado'";
	$e_c=$conexion->query($b_c);
	$a_c=$e_c->fetch_array();
	$avanz=$a_c[0];

        $b_l="SELECT COUNT(*) FROM ficha_contenido_materia WHERE materia='Algebra lineal'";
	$e_l=$conexion->query($b_l);
	$a_l=$e_l->fetch_array();
	$lineal=$a_l[0];
 ?>