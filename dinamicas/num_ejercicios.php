<?php 
	$consulta="SELECT count(*) FROM ficha_contenido_materia where materia='Algebra basica' and consideracion='Ejercicio-Problema'";
	$x=$conexion->query($consulta);
	$a=$x->fetch_array();
	$uno=$a[0];

	$consult="SELECT count(*) FROM ficha_contenido_materia where materia='Algebra intermedia' and consideracion='Ejercicio-Problema'";
	$xx=$conexion->query($consult);
	$aa=$xx->fetch_array();
	$dos=$aa[0];

	$consul="SELECT count(*) FROM ficha_contenido_materia where materia='Trigonometria' and consideracion='Ejercicio-Problema'";
	$xxx=$conexion->query($consul);
	$aaa=$xxx->fetch_array();
	$tres=$aaa[0];

	$consu="SELECT count(*) FROM ficha_contenido_materia where materia='Geometria analitica' and consideracion='Ejercicio-Problema'";
	$xxxx=$conexion->query($consu);
	$aaaa=$xxxx->fetch_array();
	$cuatro=$aaaa[0];

	$cons="SELECT count(*) FROM ficha_contenido_materia where materia='Calculo diferencial' and consideracion='Ejercicio-Problema'";
	$y=$conexion->query($cons);
	$b=$y->fetch_array();
	$cinco=$b[0];

	$con="SELECT count(*) FROM ficha_contenido_materia where materia='Calculo integral' and consideracion='Ejercicio-Problema'";
	$yy=$conexion->query($con);
	$bb=$yy->fetch_array();
	$seis=$bb[0];

        $estadisticaa="SELECT count(*) FROM ficha_contenido_materia where materia='Estadistica' and consideracion='Ejercicio-Problema'";
	$ejecutate=$conexion->query($estadisticaa);
	$arrays=$ejecutate->fetch_array();
	$siete=$arrays[0];


 ?>
