<?php 
	$correo=$_POST['correo_txt'];
	$pass=$_POST['pass_txt'];

	if ($correo=="utsploi@com" && $pass=="123qweasd") {
		session_start();
		$_SESSION['panal']="memo";
		header("Location:http://fiseaprende.com/ad/administrador.php");
	}
	else{
		echo "no mames";
	}
 ?>