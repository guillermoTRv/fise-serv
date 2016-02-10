<?php
include("../config.php"); 
$b="SELECT * FROM uni_limpias WHERE un_limpia='$u'";
$eb=$conexion->query($b);
$ab=$eb->fetch_array();
global $un;
$un=$ab[2];

if ($t!='') {
	$b="SELECT * FROM tm_limpias WHERE tm_limpia='$t'";
	$eb=$conexion->query($b);
	$ab=$eb->fetch_array();
	global $tm;
	$tm=$ab[2];	
}
?>