<?php 
	include("config.php");
	$correo_fise=addslashes(htmlspecialchars(strip_tags(trim($_POST['correof_txt']))));
	$pass_fise=addslashes(htmlspecialchars(strip_tags(trim($_POST['passf_txt']))));
	
	echo $url=addslashes(htmlspecialchars(strip_tags(trim($_POST['url_txt']))));
	echo $unidad=addslashes(htmlspecialchars(strip_tags(trim($_POST['un_txt']))));
	echo $tema=addslashes(htmlspecialchars(strip_tags(trim($_POST['tm_txt']))));
	echo $tipo=addslashes(htmlspecialchars(strip_tags(trim($_POST['by_txt']))));
	echo $consi=addslashes(htmlspecialchars(strip_tags(trim($_POST['cons_txt']))));
	echo $prefe=addslashes(htmlspecialchars(strip_tags(trim($_POST['pref_txt']))));
	echo $conta=addslashes(htmlspecialchars(strip_tags(trim($_POST['cont_txt']))));
	echo $subir=addslashes(htmlspecialchars(strip_tags(trim($_POST['sub_txt']))));

	$cons_login ="SELECT COUNT(*) FROM usuariosfise WHERE correo_user='$correo_fise' and pass_user='$pass_fise'";
	$ejecutar_login=$conexion->query($cons_login) or die('n');
	$x=$ejecutar_login->fetch_array();
	
	$perro=$x[0];
	if ($x[0]==1) {
		session_start();
		$_SESSION['usuario']=$correo_fise;
		$busca_id="SELECT id_user,correo_user,name_user FROM usuariosfise WHERE correo_user='".$_SESSION['usuario']."'";
		$dame_id=$conexion->query($busca_id);
		$x=$dame_id->fetch_array();
 
                $_SESSION['id_usuario']=$x[0];
		$_SESSION['name_user']=$x[2];

                date_default_timezone_set('America/Mexico_City');
    	        $fecha                =  date("Y-m-d H:i:s");
		$us=$_SESSION['id_usuario'];
		$insertar="INSERT INTO logins(id_user,fecha) VALUES('$us','$fecha')";
		$reg=$conexion->query($insertar) or die("que paso");		
                
                
		//////////////////////*****************************/////////////////////////
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe=='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."");
			return true;
		}
		if ($unidad!='' && $conta!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe=='' && $subir=='') {
			header("Location:".$url."?un=".$unidad."&cont=".$conta."");
			return true;
		}

		//////////////////////*****************************/////////////////////////

		if ($unidad!='' && $tema!='' && $tipo=='' && $consi=='' && $prefe=='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&tm=".$tema."");
			return true;
		}
		if ($unidad!='' && $tema!='' && $tipo=='' && $consi=='' && $prefe=='' && $conta!='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&tm=".$tema."&cont=".$conta."");
			return true;
		}
		
		//////////////////////*****************************/////////////////////////
		
		if ($unidad!='' && $tema=='' && $tipo!='' && $consi=='' && $prefe=='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&by=".$tipo."");
			return true;
		}
		if ($unidad!='' && $tema=='' && $tipo!='' && $consi=='' && $prefe=='' && $conta!='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&by=".$tipo."&cont=".$conta."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi!='' && $prefe=='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&cons=".$consi."");
			return true;
		}
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi!='' && $prefe=='' && $conta!='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&cons=".$consi."&cont=".$conta."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe!='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&prf=".$prefe."");
			return true;
		}
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe!='' && $conta!='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&prf=".$prefe."&cont=".$conta."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe=='' && $conta=='' && $subir!='') {
			header("Location: ".$url."?un=".$unidad."&sub=".$subir."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad=='') {
			header("Location: ".$url."");
			return true;
		}
	
	}
	else{
		//////////////////////*****************************/////////////////////////

		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe=='' && $conta=='' && $subir=='') {
			$mensaje="Error, usuario o contraseña incorrecto";
			header("Location: ".$url."?un=".$unidad."&mens=".$mensaje."");
			return true;
		}
		if ($unidad!='' && $conta!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe=='' && $subir=='') {
			$mensaje="Error, usuario o contraseña incorrecto";
			header("Location:".$url."?un=".$unidad."&cont=".$conta."&mens=".$mensaje."");
			return true;
		}

		//////////////////////*****************************/////////////////////////

		if ($unidad!='' && $tema!='' && $tipo=='' && $consi=='' && $prefe=='' && $conta=='' && $subir=='') {
			$mensaje="Error, usuario o contraseña incorrecto";
			header("Location: ".$url."?un=".$unidad."&tm=".$tema."&mens=".$mensaje."");
			return true;
		}
		if ($unidad!='' && $tema!='' && $tipo=='' && $consi=='' && $prefe=='' && $conta!='' && $subir=='') {
			$mensaje="Error, usuario o contraseña incorrecto";
			header("Location: ".$url."?un=".$unidad."&tm=".$tema."&cont=".$conta."&mens=".$mensaje."");
			return true;
		}
		
		//////////////////////*****************************/////////////////////////
		
		if ($unidad!='' && $tema=='' && $tipo!='' && $consi=='' && $prefe=='' && $conta=='' && $subir=='') {
			$mensaje="Error, usuario o contraseña incorrecto";
			header("Location: ".$url."?un=".$unidad."&by=".$tipo."&mens=".$mensaje."");
			return true;
		}
		if ($unidad!='' && $tema=='' && $tipo!='' && $consi=='' && $prefe=='' && $conta!='' && $subir=='') {
			$mensaje="Error, usuario o contraseña incorrecto";
			header("Location: ".$url."?un=".$unidad."&by=".$tipo."&cont=".$conta."&mens=".$mensaje."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi!='' && $prefe=='' && $conta=='' && $subir=='') {
			$mensaje="Error, usuario o contraseña incorrecto";
			header("Location: ".$url."?un=".$unidad."&cons=".$consi."&mens=".$mensaje."");
			return true;
		}
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi!='' && $prefe=='' && $conta!='' && $subir=='') {
			$mensaje="Error, usuario o contraseña incorrecto";
			header("Location: ".$url."?un=".$unidad."&cons=".$consi."&cont=".$conta."&mens=".$mensaje."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe!='' && $conta=='' && $subir=='') {
			$mensaje="Error, usuario o contraseña incorrecto";
			header("Location: ".$url."?un=".$unidad."&prf=".$prefe."&mens=".$mensaje."");
			return true;
		}
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe!='' && $conta!='' && $subir=='') {
			$mensaje="Error, usuario o contraseña incorrecto";
			header("Location: ".$url."?un=".$unidad."&prf=".$prefe."&cont=".$conta."&mens=".$mensaje."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe=='' && $conta=='' && $subir!='') {
			$mensaje="Error, usuario o contraseña incorrecto";
			header("Location: ".$url."?un=".$unidad."&sub=".$subir."&mens=".$mensaje."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad=='') {
			$mensaje="Error, usuario o contraseña incorrecto";
			header("Location: ".$url."?mens=".$mensaje."");
			return true;
		}
	}

 ?>