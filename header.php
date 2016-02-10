<?php 
	function IS(){
		error_reporting(E_ALL ^ E_NOTICE);
        session_start();
        return isset($_SESSION['usuario']);
    }
    if (!IS()) {
        include("headersetreg.php");
    }
    else{
        include("headersetus.php");
    }
 ?>