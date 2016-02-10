<?php 
       function megusta(){
        error_reporting(E_ALL ^ E_NOTICE);
        session_start();
        return isset($_SESSION['usuario']);
        }
        if(!megusta()){
            echo "<p class='curs'>Inicia sesion</p>";
        }
        else{

        include("../../config.php");
        $myid=$_SESSION['id_usuario'];
        $id_ficha=addslashes(htmlspecialchars(strip_tags(trim($_POST['v_n'])))); 
        date_default_timezone_set('America/Mexico_City');
        $fecha = date("d-m-Y H:i");

        $validacion="SELECT COUNT(*) FROM votos_user where id_user='$myid' and id_ficha='$id_ficha'";
        $e_validacion=$conexion->query($validacion);
        $avalidacion=$e_validacion->fetch_array();

        $x=$avalidacion[0];

        if ($x==0) {

            $sumar_voto="UPDATE ficha_contenido_materia SET voto=voto+1 where id_fichamat=$id_ficha";
            $e_suma=$conexion->query($sumar_voto);
            $busc="SELECT id_fichamat,voto FROM ficha_contenido_materia WHERE id_fichamat='$id_ficha'";
            $e_busc=$conexion->query($busc);
            $a_busc=$e_busc->fetch_array();
            $votos=$a_busc[1];
            echo "<p class='curs'>$votos votos</p>";

            $registrar_voto="INSERT INTO votos_user(id_user,id_ficha,fecha_voto) VALUES('$myid','$id_ficha','$fecha')";
            $ejecutar_rv=$conexion->query($registrar_voto);
        }
        else{
            echo "<p class='curs'>ya votaste</p>";
        }

        }
    
?>