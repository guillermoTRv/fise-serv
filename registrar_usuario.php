<?php 
	include("config.php");
	$email =addslashes(htmlspecialchars(strip_tags(trim($_POST['email_form']))));
	$usuario=addslashes(htmlspecialchars(strip_tags(trim($_POST['user_form']))));
	$point=20;
	$pass=addslashes(htmlspecialchars(strip_tags(trim($_POST['pass_form']))));
	date_default_timezone_set('America/Mexico_City');
	$fecha = date("d-m-Y H:i");
	
	//****************************************************************************************************//
	echo $url=addslashes(htmlspecialchars(strip_tags(trim($_POST['url_txt']))));
	echo $unidad=addslashes(htmlspecialchars(strip_tags(trim($_POST['un_txt']))));
	echo$tema=addslashes(htmlspecialchars(strip_tags(trim($_POST['tm_txt']))));
	echo $tipo=addslashes(htmlspecialchars(strip_tags(trim($_POST['by_txt']))));
	echo $consi=addslashes(htmlspecialchars(strip_tags(trim($_POST['cons_txt']))));
	echo $prefe=addslashes(htmlspecialchars(strip_tags(trim($_POST['pref_txt']))));
	echo $conta=addslashes(htmlspecialchars(strip_tags(trim($_POST['cont_txt']))));
	echo $subir=addslashes(htmlspecialchars(strip_tags(trim($_POST['sub_txt']))));
	/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

	$cons_email ="SELECT COUNT(correo_user) FROM usuariosfise WHERE correo_user='$email'";
	$ejecutar_ce=$conexion->query($cons_email);
	$xe=$ejecutar_ce->fetch_array();
	if ($xe[0]==0) {
		$cons_user ="SELECT COUNT(name_user) FROM usuariosfise WHERE name_user='$usuario'";
		$ejecutar_ue=$conexion->query($cons_user);
		$xu=$ejecutar_ue->fetch_array();
		if ($xu[0]==0) {
			$insertar="INSERT INTO usuariosfise(correo_user,name_user,point_user,pass_user,fecha_registro_us) VALUES ('$email','$usuario','$point','$pass','$fecha')";
			$do_insertar=$conexion->query($insertar);
			
			$traer_id="SELECT id_user, correo_user, name_user FROM usuariosfise WHERE correo_user='$email'";
			$ejecutar_traer=$conexion->query($traer_id);
			$z=$ejecutar_traer->fetch_array();
			$id_buscada=$z[0];
			$nm=$z[2];

			$listas="INSERT INTO list_contentarch(id_user,name_listcontent,fecha_registro_listcont) VALUES('$id_buscada','lista_default','$fecha')";
			$ejecutar_lista=$conexion->query($listas);


			$mensaje="Gracias por unirte, ahora eres miembro de una maravillosa comunidad, este sera tu panel de control";
			session_start();
			$_SESSION['usuario']=$email;
			$_SESSION['id_usuario']=$z[0];
			$_SESSION['name_user']=$z[2];
			header("Location: http://fiseaprende.com/usuario/users?ini=inicio&mens=$mensaje");
		}
		else{
		global $mensaje_uno;
		$mensaje_uno="El nombre de usario ya existe";
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe=='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&mens=".$mensaje_uno."");
			return true;
		}
		if ($unidad!='' && $conta!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe=='' && $subir=='') {
			header("Location:".$url."?un=".$unidad."&cont=".$conta."&mens=".$mensaje_uno."");
			return true;
		}

		//////////////////////*****************************/////////////////////////

		if ($unidad!='' && $tema!='' && $tipo=='' && $consi=='' && $prefe=='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&tm=".$tema."&mens=".$mensaje_uno."");
			return true;
		}
		if ($unidad!='' && $tema!='' && $tipo=='' && $consi=='' && $prefe=='' && $conta!='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&tm=".$tema."&cont=".$conta."&mens=".$mensaje_uno."");
			return true;
		}
		
		//////////////////////*****************************/////////////////////////
		
		if ($unidad!='' && $tema=='' && $tipo!='' && $consi=='' && $prefe=='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&by=".$tipo."&mens=".$mensaje_uno."");
			return true;
		}
		if ($unidad!='' && $tema=='' && $tipo!='' && $consi=='' && $prefe=='' && $conta!='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&by=".$tipo."&cont=".$conta."&mens=".$mensaje_uno."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi!='' && $prefe=='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&cons=".$consi."&mens=".$mensaje_uno."");
			return true;
		}
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi!='' && $prefe=='' && $conta!='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&cons=".$consi."&cont=".$conta."&mens=".$mensaje_uno."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe!='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&prf=".$prefe."&mens=".$mensaje_uno."");
			return true;
		}
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe!='' && $conta!='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&prf=".$prefe."&cont=".$conta."&mens=".$mensaje_uno."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe=='' && $conta=='' && $subir!='') {
			header("Location: ".$url."?un=".$unidad."&sub=".$subir."&mens=".$mensaje_uno."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad=='') {
			header("Location: ".$url."?mens=".$mensaje_uno."");
			return true;
		}

		}
	}
	else{
		global $mensaje_dos;
		$mensaje_dos="Ese correro ya esta registrado";
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe=='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&mens=".$mensaje_dos."");
			return true;
		}
		if ($unidad!='' && $conta!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe=='' && $subir=='') {
			header("Location:".$url."?un=".$unidad."&cont=".$conta."&mens=".$mensaje_dos."");
			return true;
		}

		//////////////////////*****************************/////////////////////////

		if ($unidad!='' && $tema!='' && $tipo=='' && $consi=='' && $prefe=='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&tm=".$tema."&mens=".$mensaje_dos."");
			return true;
		}
		if ($unidad!='' && $tema!='' && $tipo=='' && $consi=='' && $prefe=='' && $conta!='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&tm=".$tema."&cont=".$conta."&mens=".$mensaje_dos."");
			return true;
		}
		
		//////////////////////*****************************/////////////////////////
		
		if ($unidad!='' && $tema=='' && $tipo!='' && $consi=='' && $prefe=='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&by=".$tipo."&mens=".$mensaje_dos."");
			return true;
		}
		if ($unidad!='' && $tema=='' && $tipo!='' && $consi=='' && $prefe=='' && $conta!='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&by=".$tipo."&cont=".$conta."&mens=".$mensaje_dos."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi!='' && $prefe=='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&cons=".$consi."&mens=".$mensaje_dos."");
			return true;
		}
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi!='' && $prefe=='' && $conta!='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&cons=".$consi."&cont=".$conta."&mens=".$mensaje_dos."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe!='' && $conta=='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&prf=".$prefe."&mens=".$mensaje_dos."");
			return true;
		}
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe!='' && $conta!='' && $subir=='') {
			header("Location: ".$url."?un=".$unidad."&prf=".$prefe."&cont=".$conta."&mens=".$mensaje_dos."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad!='' && $tema=='' && $tipo=='' && $consi=='' && $prefe=='' && $conta=='' && $subir!='') {
			header("Location: ".$url."?un=".$unidad."&sub=".$subir."&mens=".$mensaje_dos."");
			return true;
		}

		//////////////////////*****************************/////////////////////////
		if ($unidad=='') {
			header("Location: ".$url."?mens=".$mensaje_dos."");
			return true;
		}

	}

?>