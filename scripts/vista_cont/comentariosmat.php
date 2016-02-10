<?php 
    function coment(){
    error_reporting(E_ALL ^ E_NOTICE);
    session_start();
        return isset($_SESSION['usuario']);
    }
    if (!coment()) {
        echo "<h4>Necesitas iniciar sesion para poder comentar :)</h4>";
        }
    else{
        include("form_comentmat.php");
        }
?>  
<?php include("mostrar_comentarios.php"); ?>
        
        <br>
        <br>