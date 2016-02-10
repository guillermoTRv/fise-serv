<?php 
	include("../config.php");
    if ($ini!='') {
    	include("inicio.php");
    }
    if ($cs!='') {
    	include("contentsave.php");
    }
    if ($aport!='') {
    	include("aportaciones.php");
    }
    if ($pref!='') {
    	include("preferentes.php");
    }
    if ($sub!='') {
    	include("subir.php");
    }
    if ($mod!='') {
    	include("modificar.php");
    }
    if ($rco!='') {
        include("recomendaciones.php");
    }
 ?>