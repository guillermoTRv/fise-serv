<?php 
    global $u; $u=addslashes(htmlspecialchars(strip_tags(trim($_GET['un']))));
    global $t; $t=addslashes(htmlspecialchars(strip_tags(trim($_GET['tm']))));
    global $by; $by=addslashes(htmlspecialchars(strip_tags(trim($_GET['by']))));
    global $cons; $cons=addslashes(htmlspecialchars(strip_tags(trim($_GET['cons']))));
    global $cont; $cont=addslashes(htmlspecialchars(strip_tags($_GET['cont'])));
    global $prf; $prf=addslashes(htmlspecialchars(strip_tags(trim($_GET['prf']))));
    global $sub; $sub=addslashes(htmlspecialchars(strip_tags(trim($_GET['sub']))));
 ?>