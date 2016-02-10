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
        $id_comentreco=addslashes(htmlspecialchars(strip_tags(trim($_POST['v_n'])))); 
        date_default_timezone_set('America/Mexico_City');
        $datatime       =   date("Y-m-d H:i:s");

        $validacion="SELECT COUNT(*) FROM votos_reco where id_user='$myid' and id_comentreco='$id_comentreco'";
        $e_validacion=$conexion->query($validacion);
        $avalidacion=$e_validacion->fetch_array();

        $x=$avalidacion[0];

        if ($x==0) {

            $sumar_voto="UPDATE coment_reco SET voto=voto+1 where id_comentreco=$id_comentreco";
            $e_suma=$conexion->query($sumar_voto);
            $busc="SELECT id_comentreco,voto FROM coment_reco WHERE id_comentreco='$id_comentreco'";
            $e_busc=$conexion->query($busc);
            $a_busc=$e_busc->fetch_array();
            $votos=$a_busc[1];
            echo "<p class='curs'>$votos votos</p>";

            $registrar_voto="INSERT INTO votos_reco(id_user,id_comentreco,data_rvoto) VALUES('$myid','$id_comentreco','$datatime')";
            $ejecutar_rv=$conexion->query($registrar_voto);
        }
        else{
            echo "<p class='curs'>ya votaste</p>";
        }

        }
    
?>